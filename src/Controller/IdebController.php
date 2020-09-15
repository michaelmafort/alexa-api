<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\View\ViewBuilder;

/**
 * Ideb Controller
 *
 * @property \App\Model\Table\IdebTable $Ideb
 * @method \App\Model\Entity\Ideb[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebController extends AppController
{
    const IDEB_YEAR = 2019;

    public function index()
    {
        $location = $this->request->getQuery('location');
        $dependence = $this->request->getQuery('dependence') ?: 'Pública';
        $locationType = $this->request->getQuery('locationType') ?: 'city';
        $year = $this->request->getQuery('year') ?: self::IDEB_YEAR;

        $ideb = $this->search($location, $dependence, $locationType, $year);

        $this->set('ideb', $ideb);
        $this->viewBuilder()->setOption('serialize', 'ideb');
    }
    
    public function answer()
    {
        $location = $this->request->getQuery('location');
        $dependence = $this->request->getQuery('dependence') ?: 'Pública';
        $locationType = $this->request->getQuery('locationType') ?: 'city';
        $year = $this->request->getQuery('year') ?: self::IDEB_YEAR;
        $prevYear = $year -2;
        $ideb = $this->search($location, $dependence, $locationType, $year);

        $phrase = "Nenhum resultado encontrado";
        
        if($ideb) {

            $idebPrev = $this->search($location, $dependence, $locationType, $prevYear);

            $translate = [
                'AI' => 'Anos Iniciais',
                'AF' => 'Anos Finais',
                'EM' => 'Ensino Médio',
                'city' => 'município',
                'state' => 'estado'
            ];

            $txt = [];
            $txtPerf = [];
            $target = [];

            foreach($ideb as $stage => $data) {
                $data = (object) $data;
                
                $txt[] = "{$data->score} para {$translate[$stage]}";
                if(isset($idebPrev[$stage])) {
                    $prev = (object) $idebPrev[$stage];
                    $scoreResult = $data->score - $prev->score;
                    $txtPerf[] = ($scoreResult > 0 ? "aumentou {$scoreResult} para {$translate[$stage]}" : ($scoreResult == 0 ? "aumentou {$scoreResult} para {$translate[$stage]}" : "manteve o mesmo resultado para {$translate[$stage]}"));
                }  

                if($data->score >= 6) {
                    $target[] = $translate[$stage];
                }
            }

            $txtTarget = "não alcançou idébi 6 para nenhuma etapa avaliada.";
            if(!empty($target)) {
                $txtTarget = "alcançou a meta de idébi 6 para " . join(", e ", $target);
            }

            $txtResult = join(", e ", $txt);
            $txtResultPerformance = join(", e ", $txtPerf);
            $phrase = "O resultado do idébi do ano de $year para {$location} foi de {$txtResult}. O desempenho comparado ao ano de {$prevYear} {$txtResultPerformance}. Este {$translate[$locationType]} {$txtTarget}";
        }
    
        $this->set('speak', ['speak' => $phrase]);
        $this->viewBuilder()->setOption('serialize', 'speak');

    }

    private function search($location, $dependence, $locationType, $year = 2017)
    {
        $ideb = $this->Ideb->find('all', [
            'contain' => ['Locations'], 
            'conditions' => [
                'Locations.name' => $location,
                'Locations.type' => $locationType,
                'Ideb.year' => $year,
                'OR' => [
                    'Ideb.network' => $dependence,
                    'AND' => [
                        'Ideb.network' => 'Estadual',
                        'length(Ideb.location_id) <' => 6,
                        'Ideb.stage' => 'EM'
                    ]
                ]
                ]
            ]
        )->toArray();  
        
        return $this->format($ideb);
        
    }

    public function format($data)
    {
        $out = [];
        foreach($data as $row) {
            $out[$row->stage] = [
                'year' => $row->year,
                'score' => $row->score,
                'network' => $row->network,
                'location' => $row->location->name,
                'location_type' => $row->location->type
            ];
        }

        return $out;
    }
}
