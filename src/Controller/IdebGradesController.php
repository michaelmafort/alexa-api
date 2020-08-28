<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * IdebGrades Controller
 *
 * @property \App\Model\Table\IdebGradesTable $IdebGrades
 * @method \App\Model\Entity\IdebGrade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdebGradesController extends AppController
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
        $idebGrades = $this->paginate($this->IdebGrades);

        $this->set(compact('idebGrades'));
    }

    /**
     * View method
     *
     * @param string|null $id Ideb Grade id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idebGrade = $this->IdebGrades->get($id, [
            'contain' => ['Locations'],
        ]);

        $this->set(compact('idebGrade'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idebGrade = $this->IdebGrades->newEmptyEntity();
        if ($this->request->is('post')) {
            $idebGrade = $this->IdebGrades->patchEntity($idebGrade, $this->request->getData());
            if ($this->IdebGrades->save($idebGrade)) {
                $this->Flash->success(__('The ideb grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb grade could not be saved. Please, try again.'));
        }
        $locations = $this->IdebGrades->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebGrade', 'locations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ideb Grade id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idebGrade = $this->IdebGrades->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idebGrade = $this->IdebGrades->patchEntity($idebGrade, $this->request->getData());
            if ($this->IdebGrades->save($idebGrade)) {
                $this->Flash->success(__('The ideb grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ideb grade could not be saved. Please, try again.'));
        }
        $locations = $this->IdebGrades->Locations->find('list', ['limit' => 200]);
        $this->set(compact('idebGrade', 'locations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ideb Grade id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idebGrade = $this->IdebGrades->get($id);
        if ($this->IdebGrades->delete($idebGrade)) {
            $this->Flash->success(__('The ideb grade has been deleted.'));
        } else {
            $this->Flash->error(__('The ideb grade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
