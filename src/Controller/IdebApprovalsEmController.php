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

}
