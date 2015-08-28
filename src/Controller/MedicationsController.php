<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medications Controller
 *
 * @property \App\Model\Table\MedicationsTable $Medications
 */
class MedicationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('medications', $this->paginate($this->Medications));
        $this->set('_serialize', ['medications']);
    }

    /**
     * View method
     *
     * @param string|null $id Medication id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medication = $this->Medications->get($id, [
            'contain' => ['Visits']
        ]);
        $this->set('medication', $medication);
        $this->set('_serialize', ['medication']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medication = $this->Medications->newEntity();
        if ($this->request->is('post')) {
            $medication = $this->Medications->patchEntity($medication, $this->request->data);
            if ($this->Medications->save($medication)) {
                $this->Flash->success(__('The medication has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medication could not be saved. Please, try again.'));
            }
        }
        $visits = $this->Medications->Visits->find('list', ['limit' => 200]);
        $this->set(compact('medication', 'visits'));
        $this->set('_serialize', ['medication']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medication id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medication = $this->Medications->get($id, [
            'contain' => ['Visits']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medication = $this->Medications->patchEntity($medication, $this->request->data);
            if ($this->Medications->save($medication)) {
                $this->Flash->success(__('The medication has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medication could not be saved. Please, try again.'));
            }
        }
        $visits = $this->Medications->Visits->find('list', ['limit' => 200]);
        $this->set(compact('medication', 'visits'));
        $this->set('_serialize', ['medication']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medication id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medication = $this->Medications->get($id);
        if ($this->Medications->delete($medication)) {
            $this->Flash->success(__('The medication has been deleted.'));
        } else {
            $this->Flash->error(__('The medication could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
