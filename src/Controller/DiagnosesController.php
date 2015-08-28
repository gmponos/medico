<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diagnoses Controller
 *
 * @property \App\Model\Table\DiagnosesTable $Diagnoses
 */
class DiagnosesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('diagnoses', $this->paginate($this->Diagnoses));
        $this->set('_serialize', ['diagnoses']);
    }

    /**
     * View method
     *
     * @param string|null $id Diagnosis id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diagnosis = $this->Diagnoses->get($id, [
            'contain' => []
        ]);
        $this->set('diagnosis', $diagnosis);
        $this->set('_serialize', ['diagnosis']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diagnosis = $this->Diagnoses->newEntity();
        if ($this->request->is('post')) {
            $diagnosis = $this->Diagnoses->patchEntity($diagnosis, $this->request->data);
            if ($this->Diagnoses->save($diagnosis)) {
                $this->Flash->success(__('The diagnosis has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diagnosis could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('diagnosis'));
        $this->set('_serialize', ['diagnosis']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Diagnosis id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diagnosis = $this->Diagnoses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diagnosis = $this->Diagnoses->patchEntity($diagnosis, $this->request->data);
            if ($this->Diagnoses->save($diagnosis)) {
                $this->Flash->success(__('The diagnosis has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The diagnosis could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('diagnosis'));
        $this->set('_serialize', ['diagnosis']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diagnosis id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diagnosis = $this->Diagnoses->get($id);
        if ($this->Diagnoses->delete($diagnosis)) {
            $this->Flash->success(__('The diagnosis has been deleted.'));
        } else {
            $this->Flash->error(__('The diagnosis could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
