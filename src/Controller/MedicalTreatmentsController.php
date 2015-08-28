<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MedicalTreatments Controller
 *
 * @property \App\Model\Table\MedicalTreatmentsTable $MedicalTreatments
 */
class MedicalTreatmentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('medicalTreatments', $this->paginate($this->MedicalTreatments));
        $this->set('_serialize', ['medicalTreatments']);
    }

    /**
     * View method
     *
     * @param string|null $id Medical Treatment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicalTreatment = $this->MedicalTreatments->get($id, [
            'contain' => []
        ]);
        $this->set('medicalTreatment', $medicalTreatment);
        $this->set('_serialize', ['medicalTreatment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicalTreatment = $this->MedicalTreatments->newEntity();
        if ($this->request->is('post')) {
            $medicalTreatment = $this->MedicalTreatments->patchEntity($medicalTreatment, $this->request->data);
            if ($this->MedicalTreatments->save($medicalTreatment)) {
                $this->Flash->success(__('The medical treatment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medical treatment could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('medicalTreatment'));
        $this->set('_serialize', ['medicalTreatment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medical Treatment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicalTreatment = $this->MedicalTreatments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicalTreatment = $this->MedicalTreatments->patchEntity($medicalTreatment, $this->request->data);
            if ($this->MedicalTreatments->save($medicalTreatment)) {
                $this->Flash->success(__('The medical treatment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The medical treatment could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('medicalTreatment'));
        $this->set('_serialize', ['medicalTreatment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medical Treatment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicalTreatment = $this->MedicalTreatments->get($id);
        if ($this->MedicalTreatments->delete($medicalTreatment)) {
            $this->Flash->success(__('The medical treatment has been deleted.'));
        } else {
            $this->Flash->error(__('The medical treatment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
