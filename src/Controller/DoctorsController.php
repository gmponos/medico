<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doctors Controller
 *
 * @property \App\Model\Table\DoctorsTable $Doctors
 */
class DoctorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Specialties', 'Hospitals'],
        ];
        $this->set('doctors', $this->paginate($this->Doctors));
        $this->set('_serialize', ['doctors']);
    }

    /**
     * View method
     *
     * @param string|null $id Doctor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doctor = $this->Doctors->get($id, [
            'contain' => ['Specialties', 'Hospitals', 'Visits', 'Appointments'],
        ]);
        $this->set('doctor', $doctor);
        $this->set('_serialize', ['doctor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctor = $this->Doctors->newEntity();
        if ($this->request->is('post')) {
            $doctor = $this->Doctors->patchEntity($doctor, $this->request->data);
            if ($this->Doctors->save($doctor)) {
                $this->Flash->success(__('The doctor has been saved.'), ['plugin' => 'CakeBootstrap']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doctor could not be saved. Please, try again.'));
            }
        }
        $specialties = $this->Doctors->Specialties->find('list', ['limit' => 200]);
        $hospitals = $this->Doctors->Hospitals->find('list', ['limit' => 200]);
        $this->set(compact('doctor', 'specialties', 'hospitals'));
        $this->set('_serialize', ['doctor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doctor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctor = $this->Doctors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctor = $this->Doctors->patchEntity($doctor, $this->request->data);
            if ($this->Doctors->save($doctor)) {
                $this->Flash->success(__('The doctor has been saved.'), ['plugin' => 'CakeBootstrap']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doctor could not be saved. Please, try again.'));
            }
        }
        $specialties = $this->Doctors->Specialties->find('list', ['limit' => 200]);
        $hospitals = $this->Doctors->Hospitals->find('list', ['limit' => 200]);
        $this->set(compact('doctor', 'specialties', 'hospitals'));
        $this->set('_serialize', ['doctor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doctor id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctor = $this->Doctors->get($id);
        if ($this->Doctors->delete($doctor)) {
            $this->Flash->success(__('The doctor has been deleted.'));
        } else {
            $this->Flash->error(__('The doctor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function export() {
        $data = [
            ['τεστ', 'b', 'c'],
            [1, 2, 3],
            ['you', 'and', 'me'],
        ];

        $_serialize = 'data';
        $_dataEncoding = 'UTF-8';
        $_csvEncoding = 'WINDOWS-1253';
        $this->response->download('test.csv');
        $this->viewBuilder()->className('CsvView.Csv');
        $this->set(compact('data', '_serialize', '_dataEncoding', '_csvEncoding'));
    }
}
