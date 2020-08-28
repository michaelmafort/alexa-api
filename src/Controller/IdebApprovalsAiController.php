<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * IdebApprovalsAi Controller
 *
 * @property \App\Model\Table\IdebApprovalsAiTable $IdebApprovalsAi
 * @method \App\Model\Entity\IdebApprovalsAi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebApprovalsAiController extends AppController
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
        $idebApprovalsAi = $this->paginate($this->IdebApprovalsAi);

        $this->set(compact('idebApprovalsAi'));
    }

    /**
     * View method
     *
     * @param string|null $id Ideb Approvals Ai id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idebApprovalsAi = $this->IdebApprovalsAi->get($id, [
            'contain' => ['Locations'],
        ]);

        $this->set(compact('idebApprovalsAi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idebApprovalsAi = $this->IdebApprovalsAi->newEmptyEntity();
        if ($this->request->is('post')) {
            $idebApprovalsAi = $this->IdebApprovalsAi->patchEntity($idebApprovalsAi, $this->request->getData());
            if ($this->IdebApprovalsAi->save($idebApprovalsAi)) {
                $this->Flash->success(__('The ideb approvals ai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb approvals ai could not be saved. Please, try again.'));
        }
        $locations = $this->IdebApprovalsAi->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebApprovalsAi', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ideb Approvals Ai id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idebApprovalsAi = $this->IdebApprovalsAi->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idebApprovalsAi = $this->IdebApprovalsAi->patchEntity($idebApprovalsAi, $this->request->getData());
            if ($this->IdebApprovalsAi->save($idebApprovalsAi)) {
                $this->Flash->success(__('The ideb approvals ai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb approvals ai could not be saved. Please, try again.'));
        }
        $locations = $this->IdebApprovalsAi->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebApprovalsAi', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ideb Approvals Ai id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idebApprovalsAi = $this->IdebApprovalsAi->get($id);
        if ($this->IdebApprovalsAi->delete($idebApprovalsAi)) {
            $this->Flash->success(__('The ideb approvals ai has been deleted.'));
        } else {
            $this->Flash->error(__('The ideb approvals ai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
