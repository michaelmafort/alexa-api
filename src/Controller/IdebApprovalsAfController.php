<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * IdebApprovalsAf Controller
 *
 * @property \App\Model\Table\IdebApprovalsAfTable $IdebApprovalsAf
 * @method \App\Model\Entity\IdebApprovalsAf[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebApprovalsAfController extends AppController
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
        $idebApprovalsAf = $this->paginate($this->IdebApprovalsAf);

        $this->set(compact('idebApprovalsAf'));
    }

    /**
     * View method
     *
     * @param string|null $id Ideb Approvals Af id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idebApprovalsAf = $this->IdebApprovalsAf->get($id, [
            'contain' => ['Locations'],
        ]);

        $this->set(compact('idebApprovalsAf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idebApprovalsAf = $this->IdebApprovalsAf->newEmptyEntity();
        if ($this->request->is('post')) {
            $idebApprovalsAf = $this->IdebApprovalsAf->patchEntity($idebApprovalsAf, $this->request->getData());
            if ($this->IdebApprovalsAf->save($idebApprovalsAf)) {
                $this->Flash->success(__('The ideb approvals af has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb approvals af could not be saved. Please, try again.'));
        }
        $locations = $this->IdebApprovalsAf->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebApprovalsAf', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ideb Approvals Af id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idebApprovalsAf = $this->IdebApprovalsAf->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idebApprovalsAf = $this->IdebApprovalsAf->patchEntity($idebApprovalsAf, $this->request->getData());
            if ($this->IdebApprovalsAf->save($idebApprovalsAf)) {
                $this->Flash->success(__('The ideb approvals af has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb approvals af could not be saved. Please, try again.'));
        }
        $locations = $this->IdebApprovalsAf->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebApprovalsAf', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ideb Approvals Af id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idebApprovalsAf = $this->IdebApprovalsAf->get($id);
        if ($this->IdebApprovalsAf->delete($idebApprovalsAf)) {
            $this->Flash->success(__('The ideb approvals af has been deleted.'));
        } else {
            $this->Flash->error(__('The ideb approvals af could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
