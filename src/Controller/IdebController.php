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
    const UFS = [
        11 => "RO",
        12 => "AC",
        13 => "AM",
        14 => "RR",
        15 => "PA",
        16 => "AP",
        17 => "TO",
        21 => "MA",
        22 => "PI",
        23 => "CE",
        24 => "RN",
        25 => "PB",
        26 => "PE",
        27 => "AL",
        28 => "SE",
        29 => "BA",
        31 => "MG",
        32 => "ES",
        33 => "RJ",
        35 => "SP",
        41 => "PR",
        42 => "SC",
        43 => "RS",
        50 => "MS",
        51 => "MT",
        52 => "GO",
        53 => "DF"
    ];

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

            $idebResults = [];

            foreach($ideb as $stage => $data) {
                $data = (object) $data;
                $uf = $data->uf;
                $title = "{$data->location} / {$data->uf}";
                $txt[] = "{$data->score} para {$translate[$stage]}";
                $idebResults["{$stage}_{$year}"] = $data->score;
                if(isset($idebPrev[$stage])) {
                    $prev = (object) $idebPrev[$stage];
                    $idebResults["{$stage}_{$prevYear}"] = $prev->score;
                    $scoreResult = $data->score - $prev->score;
                    $txtPerf[] = ($scoreResult > 0 ? "aumentou {$scoreResult} para {$translate[$stage]}" : ($scoreResult == 0 ? "aumentou {$scoreResult} para {$translate[$stage]}" : "manteve o mesmo resultado para {$translate[$stage]}"));
                }  

                if($data->score >= 6) {
                    $target[] = $translate[$stage];
                }
            }

            $txtTarget = "não alcançou idébi 6 para nenhuma etapa avaliada.";
            $successMessage = "";
            if(!empty($target)) {
                $txtTarget = "alcançou a meta de idébi 6 para " . join(", e ", $target);
                $successMessage = "Alcançou IDEB 6 para " . join(" e ", $target) . "!";
            }

            $txtResult = join(", e ", $txt);
            $txtResultPerformance = join(", e ", $txtPerf);
            $phrase = "O resultado do idébi do ano de $year para {$location} foi de {$txtResult}. O desempenho comparado ao ano de {$prevYear} {$txtResultPerformance}. Este {$translate[$locationType]} {$txtTarget}";
        }
    
        $this->set('speak', [
            'speak' => $phrase, 
            'ideb' => $idebResults, 
            "successMessage" => $successMessage, 
            "prevYear" => $prevYear, 
            "year" => $year, 
            "flag" => "https://cidades.ibge.gov.br/img/bandeiras/{$uf}.gif",
            "title" => $title
            ]);
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

        // debug($ideb);exit;
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
                'location_type' => $row->location->type,
                'uf' => self::UFS[substr(strval($row->location->id), 0, 2)]
            ];
        }

        return $out;
    }
}
