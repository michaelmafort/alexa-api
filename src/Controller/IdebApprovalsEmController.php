<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * IdebApprovalsEm Controller
 *
 * @property \App\Model\Table\IdebApprovalsEmTable $IdebApprovalsEm
 * @method \App\Model\Entity\IdebApprovalsEm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebApprovalsEmController extends AppController
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
        $idebApprovalsEm = $this->paginate($this->IdebApprovalsEm);

        $this->set(compact('idebApprovalsEm'));
    }

    /**
     * View method
     *
     * @param string|null $id Ideb Approvals Em id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idebApprovalsEm = $this->IdebApprovalsEm->get($id, [
            'contain' => ['Locations'],
        ]);

        $this->set(compact('idebApprovalsEm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idebApprovalsEm = $this->IdebApprovalsEm->newEmptyEntity();
        if ($this->request->is('post')) {
            $idebApprovalsEm = $this->IdebApprovalsEm->patchEntity($idebApprovalsEm, $this->request->getData());
            if ($this->IdebApprovalsEm->save($idebApprovalsEm)) {
                $this->Flash->success(__('The ideb approvals em has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb approvals em could not be saved. Please, try again.'));
        }
        $locations = $this->IdebApprovalsEm->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebApprovalsEm', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ideb Approvals Em id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idebApprovalsEm = $this->IdebApprovalsEm->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idebApprovalsEm = $this->IdebApprovalsEm->patchEntity($idebApprovalsEm, $this->request->getData());
            if ($this->IdebApprovalsEm->save($idebApprovalsEm)) {
                $this->Flash->success(__('The ideb approvals em has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb approvals em could not be saved. Please, try again.'));
        }
        $locations = $this->IdebApprovalsEm->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebApprovalsEm', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ideb Approvals Em id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idebApprovalsEm = $this->IdebApprovalsEm->get($id);
        if ($this->IdebApprovalsEm->delete($idebApprovalsEm)) {
            $this->Flash->success(__('The ideb approvals em has been deleted.'));
        } else {
            $this->Flash->error(__('The ideb approvals em could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
