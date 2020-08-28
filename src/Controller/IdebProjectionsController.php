<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * IdebProjections Controller
 *
 * @property \App\Model\Table\IdebProjectionsTable $IdebProjections
 * @method \App\Model\Entity\IdebProjection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebProjectionsController extends AppController
{
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
        $idebProjections = $this->paginate($this->IdebProjections);

        $this->set(compact('idebProjections'));
    }

    /**
     * View method
     *
     * @param string|null $id Ideb Projection id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idebProjection = $this->IdebProjections->get($id, [
            'contain' => ['Locations'],
        ]);

        $this->set(compact('idebProjection'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idebProjection = $this->IdebProjections->newEmptyEntity();
        if ($this->request->is('post')) {
            $idebProjection = $this->IdebProjections->patchEntity($idebProjection, $this->request->getData());
            if ($this->IdebProjections->save($idebProjection)) {
                $this->Flash->success(__('The ideb projection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb projection could not be saved. Please, try again.'));
        }
        $locations = $this->IdebProjections->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebProjection', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ideb Projection id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idebProjection = $this->IdebProjections->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idebProjection = $this->IdebProjections->patchEntity($idebProjection, $this->request->getData());
            if ($this->IdebProjections->save($idebProjection)) {
                $this->Flash->success(__('The ideb projection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb projection could not be saved. Please, try again.'));
        }
        $locations = $this->IdebProjections->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebProjection', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ideb Projection id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idebProjection = $this->IdebProjections->get($id);
        if ($this->IdebProjections->delete($idebProjection)) {
            $this->Flash->success(__('The ideb projection has been deleted.'));
        } else {
            $this->Flash->error(__('The ideb projection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
