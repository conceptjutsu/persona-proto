<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Municipalities Controller
 *
 * @property \App\Model\Table\MunicipalitiesTable $Municipalities
 *
 * @method \App\Model\Entity\Municipality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MunicipalitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Provinces'],
        ];
        $municipalities = $this->paginate($this->Municipalities);

        $this->set(compact('municipalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Municipality id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipality = $this->Municipalities->get($id, [
            'contain' => ['Provinces', 'Areas'],
        ]);

        $this->set('municipality', $municipality);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipality = $this->Municipalities->newEntity();
        if ($this->request->is('post')) {
            $municipality = $this->Municipalities->patchEntity($municipality, $this->request->getData());
            if ($this->Municipalities->save($municipality)) {
                $this->Flash->success(__('The municipality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipality could not be saved. Please, try again.'));
        }
        $provinces = $this->Municipalities->Provinces->find('list', ['limit' => 200]);
        $this->set(compact('municipality', 'provinces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipality id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipality = $this->Municipalities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipality = $this->Municipalities->patchEntity($municipality, $this->request->getData());
            if ($this->Municipalities->save($municipality)) {
                $this->Flash->success(__('The municipality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipality could not be saved. Please, try again.'));
        }
        $provinces = $this->Municipalities->Provinces->find('list', ['limit' => 200]);
        $this->set(compact('municipality', 'provinces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipality id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipality = $this->Municipalities->get($id);
        if ($this->Municipalities->delete($municipality)) {
            $this->Flash->success(__('The municipality has been deleted.'));
        } else {
            $this->Flash->error(__('The municipality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
