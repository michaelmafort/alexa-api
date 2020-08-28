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

}
