<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Despesa Controller
 *
 * @property \App\Model\Table\DespesaTable $Despesa
 */
class DespesaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Despesa->find()
            ->contain(['Funcionario', 'Produto']);
        $despesa = $this->paginate($query);

        $this->set(compact('despesa'));
    }

    /**
     * View method
     *
     * @param string|null $id Despesa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $despesa = $this->Despesa->get($id, contain: ['Funcionario', 'Produto', 'ControleFinanceiro']);
        $this->set(compact('despesa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $despesa = $this->Despesa->newEmptyEntity();
        if ($this->request->is('post')) {
            $despesa = $this->Despesa->patchEntity($despesa, $this->request->getData());
            if ($this->Despesa->save($despesa)) {
                $this->Flash->success(__('The despesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The despesa could not be saved. Please, try again.'));
        }
        $funcionario = $this->Despesa->Funcionario->find('list', limit: 200)->all();
        $produto = $this->Despesa->Produto->find('list', limit: 200)->all();
        $this->set(compact('despesa', 'funcionario', 'produto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Despesa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $despesa = $this->Despesa->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $despesa = $this->Despesa->patchEntity($despesa, $this->request->getData());
            if ($this->Despesa->save($despesa)) {
                $this->Flash->success(__('The despesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The despesa could not be saved. Please, try again.'));
        }
        $funcionario = $this->Despesa->Funcionario->find('list', limit: 200)->all();
        $produto = $this->Despesa->Produto->find('list', limit: 200)->all();
        $this->set(compact('despesa', 'funcionario', 'produto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Despesa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $despesa = $this->Despesa->get($id);
        if ($this->Despesa->delete($despesa)) {
            $this->Flash->success(__('The despesa has been deleted.'));
        } else {
            $this->Flash->error(__('The despesa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
