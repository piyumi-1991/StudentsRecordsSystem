<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StudentsRecords Controller
 *
 * @method \App\Model\Entity\StudentsRecord[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsRecordsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $studentsRecords = $this->paginate($this->StudentsRecords);

        $this->set(compact('studentsRecords'));
        // echo json_encode($studentsRecords);
        // exit();
    }

    /**
     * View method
     *
     * @param string|null $id Students Record id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentsRecord = $this->StudentsRecords->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('studentsRecord'));
        // echo json_encode($studentsRecord);
        // exit();
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentsRecord = $this->StudentsRecords->newEmptyEntity();
        if ($this->request->is('post')) {
            $studentsRecord = $this->StudentsRecords->patchEntity($studentsRecord, $this->request->getData());
            if ($this->StudentsRecords->save($studentsRecord)) {
                $this->Flash->success(__('The students record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The students record could not be saved. Please, try again.'));
        }
        $this->set(compact('studentsRecord'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Students Record id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentsRecord = $this->StudentsRecords->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentsRecord = $this->StudentsRecords->patchEntity($studentsRecord, $this->request->getData());
            if ($this->StudentsRecords->save($studentsRecord)) {
                $this->Flash->success(__('The students record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The students record could not be saved. Please, try again.'));
        }
        $this->set(compact('studentsRecord'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Students Record id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentsRecord = $this->StudentsRecords->get($id);
        if ($this->StudentsRecords->delete($studentsRecord)) {
            $this->Flash->success(__('The students record has been deleted.'));
        } else {
            $this->Flash->error(__('The students record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
