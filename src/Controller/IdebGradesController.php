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

}
