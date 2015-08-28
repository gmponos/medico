<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MedicationsVisits Controller
 *
 * @property \App\Model\Table\MedicationsVisitsTable $MedicationsVisits
 */
class MedicationsVisitsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Medications', 'Visits']
        ];
        $this->set('medicationsVisits', $this->paginate($this->MedicationsVisits));
        $this->set('_serialize', ['medicationsVisits']);
    }

    /**
     * View method
     *
     * @param string|null $id Medications Visit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicationsVisit = $this->MedicationsVisits->get($id, [
            'contain' => ['Medications', 'Visits']
        ]);
        $this->set('medicationsVisit', $medicationsVisit);
        $this->set('_serialize', ['medicationsVisit']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicationsVisit = $this->MedicationsVisits->newEntity();
        if ($this->request->is('post')) {
            $medicationsVisit = $this->MedicationsVisits->patchEntity($medicationsVisit, $this->request->data);
            if ($this->MedicationsVisits->save($medicationsVisit)) {
                $this->Flash->success(__('The medications visit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medications visit could not be saved. Please, try again.'));
            }
        }
        $medications = $this->MedicationsVisits->Medications->find('list', ['limit' => 200]);
        $visits = $this->MedicationsVisits->Visits->find('list', ['limit' => 200]);
        $this->set(compact('medicationsVisit', 'medications', 'visits'));
        $this->set('_serialize', ['medicationsVisit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medications Visit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicationsVisit = $this->MedicationsVisits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicationsVisit = $this->MedicationsVisits->patchEntity($medicationsVisit, $this->request->data);
            if ($this->MedicationsVisits->save($medicationsVisit)) {
                $this->Flash->success(__('The medications visit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medications visit could not be saved. Please, try again.'));
            }
        }
        $medications = $this->MedicationsVisits->Medications->find('list', ['limit' => 200]);
        $visits = $this->MedicationsVisits->Visits->find('list', ['limit' => 200]);
        $this->set(compact('medicationsVisit', 'medications', 'visits'));
        $this->set('_serialize', ['medicationsVisit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medications Visit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicationsVisit = $this->MedicationsVisits->get($id);
        if ($this->MedicationsVisits->delete($medicationsVisit)) {
            $this->Flash->success(__('The medications visit has been deleted.'));
        } else {
            $this->Flash->error(__('The medications visit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
