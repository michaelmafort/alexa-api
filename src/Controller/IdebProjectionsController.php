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

}
