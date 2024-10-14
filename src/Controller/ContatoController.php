<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contato Controller
 *
 * @property \App\Model\Table\ContatoTable $Contato
 */
class ContatoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Contato->find()
            ->contain(['Cliente', 'Funcionario']);
        $contato = $this->paginate($query);

        $this->set(compact('contato'));
    }

    /**
     * View method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contato = $this->Contato->get($id, contain: ['Cliente', 'Funcionario']);
        $this->set(compact('contato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contato = $this->Contato->newEmptyEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contato->patchEntity($contato, $this->request->getData());
            if ($this->Contato->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contato could not be saved. Please, try again.'));
        }
        $cliente = $this->Contato->Cliente->find('list', limit: 200)->all();
        $funcionario = $this->Contato->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('contato', 'cliente', 'funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contato = $this->Contato->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contato = $this->Contato->patchEntity($contato, $this->request->getData());
            if ($this->Contato->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contato could not be saved. Please, try again.'));
        }
        $cliente = $this->Contato->Cliente->find('list', limit: 200)->all();
        $funcionario = $this->Contato->Funcionario->find('list', limit: 200)->all();
        $this->set(compact('contato', 'cliente', 'funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contato = $this->Contato->get($id);
        if ($this->Contato->delete($contato)) {
            $this->Flash->success(__('The contato has been deleted.'));
        } else {
            $this->Flash->error(__('The contato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
