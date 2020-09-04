<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Log\Log;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $local = $this->request->getQuery('local');
        $user_id = $this->request->getQuery('user_id');

        $items = $this->Items->find('all', ['conditions' => ['usuario' => $user_id, 'local' => $local]])->toArray();

        $speek = ['speek' => "Nenhum item encontrado"];
        if($items) {
            $speek = array_map(function($i) {
                return $i['item'];
            }, $items);
            $speek = ['speek' => join(", ", $speek)];
        } 
        $this->set('speek', $speek);
        $this->viewBuilder()->setOption('serialize', 'speek');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEmptyEntity();
        $speek = ['speek' => 'Erro ao adicionar, tente novamente.'];

        if ($this->request->is('post')) {

            $conditions = [
                'usuario' => $this->request->getData('usuario'), 
                'local' => $this->request->getData('local'), 
                'item' => $this->request->getData('item')
            ];

            $prev = $this->Items->find('all', ['conditions' => $conditions])->toArray();

            if($prev) {
                $speek = ['speek' => 'Item já está registrado'];
            } else {
                $item = $this->Items->patchEntity($item, $this->request->getData());
                if ($this->Items->save($item)) {
                    $speek = ['speek' => 'Item adicionado.'];
                }
            }
        }
        $this->set('speek', $speek);
        $this->viewBuilder()->setOption('serialize', 'speek');
    }

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id Item id.
    //  * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $item = $this->Items->get($id, [
    //         'contain' => [],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $item = $this->Items->patchEntity($item, $this->request->getData());
    //         if ($this->Items->save($item)) {
    //             $this->Flash->success(__('The item has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The item could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('item'));
    // }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete()
    {
        $item = $this->Items->newEmptyEntity();
        $speek = ['speek' => 'Erro ao remover, tente novamente.'];

        if ($this->request->is('post')) {

            $conditions = [
                'usuario' => $this->request->getData('usuario'), 
                'local' => $this->request->getData('local'), 
                'item' => $this->request->getData('item')
            ];

            $item = $this->Items->find('all', ['conditions' => $conditions])->first();

            if($item && $this->Items->delete($item)) {
                $speek = ['speek' => 'Item removido'];
            }
        }
        $this->set('speek', $speek);
        $this->viewBuilder()->setOption('serialize', 'speek');
    }

}
