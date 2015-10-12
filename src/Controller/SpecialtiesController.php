<?php
namespace App\Controller;

/**
 * Specialties Controller
 *
 * @property \App\Model\Table\SpecialtiesTable $Specialties
 */
class SpecialtiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('specialties', $this->paginate($this->Specialties));
        $this->set('_serialize', ['specialties']);
    }

    /**
     * View method
     *
     * @param string|null $id Specialty id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialty = $this->Specialties->get($id, [
            'contain' => ['Doctors.Hospitals'],
        ]);
        $this->set('specialty', $specialty);
        $this->set('_serialize', ['specialty']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialty = $this->Specialties->newEntity();
        if ($this->request->is('post')) {
            $specialty = $this->Specialties->patchEntity($specialty, $this->request->data);
            if ($this->Specialties->save($specialty)) {
                $this->Flash->success(__('The specialty has been saved.'), ['plugin' => 'CakeBootstrap']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The specialty could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('specialty'));
        $this->set('_serialize', ['specialty']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Specialty id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialty = $this->Specialties->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialty = $this->Specialties->patchEntity($specialty, $this->request->data);
            if ($this->Specialties->save($specialty)) {
                $this->Flash->success(__('The specialty has been saved.'), ['plugin' => 'CakeBootstrap']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The specialty could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('specialty'));
        $this->set('_serialize', ['specialty']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Specialty id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialty = $this->Specialties->get($id);
        if ($this->Specialties->delete($specialty)) {
            $this->Flash->success(__('The specialty has been deleted.'));
        } else {
            $this->Flash->error(__('The specialty could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
