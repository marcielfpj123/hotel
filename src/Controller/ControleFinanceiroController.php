<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ControleFinanceiro Controller
 *
 * @property \App\Model\Table\ControleFinanceiroTable $ControleFinanceiro
 */
class ControleFinanceiroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ControleFinanceiro->find()
            ->contain(['Funcionario', 'Ganho', 'Despesa']);
        $controleFinanceiro = $this->paginate($query);

        $this->set(compact('controleFinanceiro'));
    }

    /**
     * View method
     *
     * @param string|null $id Controle Financeiro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controleFinanceiro = $this->ControleFinanceiro->get($id, contain: ['Funcionario', 'Ganho', 'Despesa']);
        $this->set(compact('controleFinanceiro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controleFinanceiro = $this->ControleFinanceiro->newEmptyEntity();
        if ($this->request->is('post')) {
            $controleFinanceiro = $this->ControleFinanceiro->patchEntity($controleFinanceiro, $this->request->getData());
            if ($this->ControleFinanceiro->save($controleFinanceiro)) {
                $this->Flash->success(__('The controle financeiro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controle financeiro could not be saved. Please, try again.'));
        }
        $funcionario = $this->ControleFinanceiro->Funcionario->find('list', limit: 200)->all();
        $ganho = $this->ControleFinanceiro->Ganho->find('list', limit: 200)->all();
        $despesa = $this->ControleFinanceiro->Despesa->find('list', limit: 200)->all();
        $this->set(compact('controleFinanceiro', 'funcionario', 'ganho', 'despesa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Controle Financeiro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controleFinanceiro = $this->ControleFinanceiro->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controleFinanceiro = $this->ControleFinanceiro->patchEntity($controleFinanceiro, $this->request->getData());
            if ($this->ControleFinanceiro->save($controleFinanceiro)) {
                $this->Flash->success(__('The controle financeiro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controle financeiro could not be saved. Please, try again.'));
        }
        $funcionario = $this->ControleFinanceiro->Funcionario->find('list', limit: 200)->all();
        $ganho = $this->ControleFinanceiro->Ganho->find('list', limit: 200)->all();
        $despesa = $this->ControleFinanceiro->Despesa->find('list', limit: 200)->all();
        $this->set(compact('controleFinanceiro', 'funcionario', 'ganho', 'despesa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Controle Financeiro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controleFinanceiro = $this->ControleFinanceiro->get($id);
        if ($this->ControleFinanceiro->delete($controleFinanceiro)) {
            $this->Flash->success(__('The controle financeiro has been deleted.'));
        } else {
            $this->Flash->error(__('The controle financeiro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
