<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Visits Controller
 *
 * @property \App\Model\Table\VisitsTable $Visits
 */
class VisitsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Doctors', 'Diagnoses']
        ];
        $this->set('visits', $this->paginate($this->Visits));
        $this->set('_serialize', ['visits']);
    }

    /**
     * View method
     *
     * @param string|null $id Visit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visit = $this->Visits->get($id, [
            'contain' => ['Doctors', 'Diagnoses', 'Medications']
        ]);
        $this->set('visit', $visit);
        $this->set('_serialize', ['visit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visit = $this->Visits->newEntity();
        if ($this->request->is('post')) {
            $visit = $this->Visits->patchEntity($visit, $this->request->data);
            if ($this->Visits->save($visit)) {
                $this->Flash->success(__('The visit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visit could not be saved. Please, try again.'));
            }
        }
        $doctors = $this->Visits->Doctors->find('list', ['limit' => 200]);
        $diagnoses = $this->Visits->Diagnoses->find('list', ['limit' => 200]);
        $medications = $this->Visits->Medications->find('list', ['limit' => 200]);
        $this->set(compact('visit', 'doctors', 'diagnoses', 'medications'));
        $this->set('_serialize', ['visit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Visit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visit = $this->Visits->get($id, [
            'contain' => ['Medications']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visit = $this->Visits->patchEntity($visit, $this->request->data);
            if ($this->Visits->save($visit)) {
                $this->Flash->success(__('The visit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visit could not be saved. Please, try again.'));
            }
        }
        $doctors = $this->Visits->Doctors->find('list', ['limit' => 200]);
        $diagnoses = $this->Visits->Diagnoses->find('list', ['limit' => 200]);
        $medications = $this->Visits->Medications->find('list', ['limit' => 200]);
        $this->set(compact('visit', 'doctors', 'diagnoses', 'medications'));
        $this->set('_serialize', ['visit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Visit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visit = $this->Visits->get($id);
        if ($this->Visits->delete($visit)) {
            $this->Flash->success(__('The visit has been deleted.'));
        } else {
            $this->Flash->error(__('The visit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
