<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Albums Controller
 *
 * @property \App\Model\Table\AlbumsTable $Albums
 * @method \App\Model\Entity\Album[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlbumsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $albums = $this->paginate($this->Albums);

        $this->set(compact('albums'));
    }

    /**
     * View method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $album = $this->Albums->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('album'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $album = $this->Albums->newEmptyEntity();
        if ($this->request->is('post')) {
            $album = $this->Albums->patchEntity($album, $this->request->getData());
            if ($this->Albums->save($album)) {
                $this->Flash->success(__('The album has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The album could not be saved. Please, try again.'));
        }
        $this->set(compact('album'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $album = $this->Albums->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $album = $this->Albums->patchEntity($album, $this->request->getData());
            if ($this->Albums->save($album)) {
                $this->Flash->success(__('The album has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The album could not be saved. Please, try again.'));
        }
        $this->set(compact('album'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Album id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $album = $this->Albums->get($id);
        if ($this->Albums->delete($album)) {
            $this->Flash->success(__('The album has been deleted.'));
        } else {
            $this->Flash->error(__('The album could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
