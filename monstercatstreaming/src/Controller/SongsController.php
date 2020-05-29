<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Songs Controller
 *
 * @property \App\Model\Table\SongsTable $Songs
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SongsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Albums'],
        ];
        $songs = $this->paginate($this->Songs);

        $this->set(compact('songs'));
    }

    public function random() {
        $this->viewBuilder()->disableAutoLayout();
        $song = $this->Songs->find('all', ['order' => 'random()', 'limit' => 1])->contain('Albums')->firstOrFail();
        $album = $song->album;
        $this->set(compact('song'));
        $this->set(compact('album'));
    }

    public function song() {
        $this->viewBuilder()->disableAutoLayout();
        $song = $this->Songs->find('all', ['limit' => 1])->where(['track_id' => $_GET['id']])->contain('Albums')->firstOrFail();
        $album = $song->album;
        $this->set(compact('song'));
        $this->set(compact('album'));
    }

    /**
     * View method
     *
     * @param string|null $id Song id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $song = $this->Songs->get($id, [
            'contain' => ['Albums', 'Songs'],
        ]);

        $this->set(compact('song'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $song = $this->Songs->newEmptyEntity();
        if ($this->request->is('post')) {
            $song = $this->Songs->patchEntity($song, $this->request->getData());
            if ($this->Songs->save($song)) {
                $this->Flash->success(__('The song has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The song could not be saved. Please, try again.'));
        }
        $albums = $this->Songs->Albums->find('list', ['limit' => 200]);
        $this->set(compact('song', 'albums'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Song id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $song = $this->Songs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $song = $this->Songs->patchEntity($song, $this->request->getData());
            if ($this->Songs->save($song)) {
                $this->Flash->success(__('The song has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The song could not be saved. Please, try again.'));
        }
        $albums = $this->Songs->Albums->find('list', ['limit' => 200]);
        $this->set(compact('song', 'albums'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Song id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $song = $this->Songs->get($id);
        if ($this->Songs->delete($song)) {
            $this->Flash->success(__('The song has been deleted.'));
        } else {
            $this->Flash->error(__('The song could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
