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

}
