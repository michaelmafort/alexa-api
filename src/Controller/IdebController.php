<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ideb Controller
 *
 * @property \App\Model\Table\IdebTable $Ideb
 * @method \App\Model\Entity\Ideb[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebController extends AppController
{
    public function search()
    {
        $ideb = $this->Ideb->find('all', [
            'contain' => ['Locations'], 
            'conditions' => [
                'Locations.name like' => "%{$this->request->getQuery('location')}%",
                'Ideb.year' => 2017,
                'Ideb.network' => 'Total'
                ]
            ]
        )->toArray();

        $ideb = $this->format($ideb);

        $this->set(compact('ideb'));
        $this->set('_serialize', ['ideb']);
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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Locations'],
        ];
        $ideb = $this->paginate($this->Ideb);

        $this->set(compact('ideb'));
    }

    /**
     * View method
     *
     * @param string|null $id Ideb id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ideb = $this->Ideb->get($id, [
            'contain' => ['Locations'],
        ]);

        $this->set(compact('ideb'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ideb = $this->Ideb->newEmptyEntity();
        if ($this->request->is('post')) {
            $ideb = $this->Ideb->patchEntity($ideb, $this->request->getData());
            if ($this->Ideb->save($ideb)) {
                $this->Flash->success(__('The ideb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb could not be saved. Please, try again.'));
        }
        $locations = $this->Ideb->Locations->find('list', ['limit' => 200]);
        $this->set(compact('ideb', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ideb id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ideb = $this->Ideb->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ideb = $this->Ideb->patchEntity($ideb, $this->request->getData());
            if ($this->Ideb->save($ideb)) {
                $this->Flash->success(__('The ideb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb could not be saved. Please, try again.'));
        }
        $locations = $this->Ideb->Locations->find('list', ['limit' => 200]);
        $this->set(compact('ideb', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ideb id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ideb = $this->Ideb->get($id);
        if ($this->Ideb->delete($ideb)) {
            $this->Flash->success(__('The ideb has been deleted.'));
        } else {
            $this->Flash->error(__('The ideb could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
