<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hospitals Controller
 *
 * @property \App\Model\Table\HospitalsTable $Hospitals
 */
class HospitalsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('hospitals', $this->paginate($this->Hospitals));
        $this->set('_serialize', ['hospitals']);
    }

    /**
     * View method
     *
     * @param string|null $id Hospital id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospital = $this->Hospitals->get($id, [
            'contain' => ['Doctors.Specialties'],
        ]);
        $this->set('hospital', $hospital);
        $this->set('_serialize', ['hospital']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hospital = $this->Hospitals->newEntity();
        if ($this->request->is('post')) {
            $hospital = $this->Hospitals->patchEntity($hospital, $this->request->data);
            if ($this->Hospitals->save($hospital)) {
                $this->Flash->success(__('The hospital has been saved.'), ['plugin' => 'CakeBootstrap']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hospital could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hospital'));
        $this->set('_serialize', ['hospital']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hospital id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hospital = $this->Hospitals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospital = $this->Hospitals->patchEntity($hospital, $this->request->data);
            if ($this->Hospitals->save($hospital)) {
                $this->Flash->success(__('The hospital has been saved.'), ['plugin' => 'CakeBootstrap']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hospital could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hospital'));
        $this->set('_serialize', ['hospital']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hospital id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospital = $this->Hospitals->get($id);
        if ($this->Hospitals->delete($hospital)) {
            $this->Flash->success(__('The hospital has been deleted.'));
        } else {
            $this->Flash->error(__('The hospital could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
