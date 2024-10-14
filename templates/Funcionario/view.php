<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcionario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcionario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcionario view content">
            <h3><?= h($funcionario->cpf) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($funcionario->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doc Pessoal') ?></th>
                    <td><?= h($funcionario->doc_pessoal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($funcionario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($funcionario->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcao') ?></th>
                    <td><?= h($funcionario->funcao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avaliacao') ?></th>
                    <td><?= h($funcionario->avaliacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($funcionario->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nasc') ?></th>
                    <td><?= h($funcionario->data_nasc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Cadastro') ?></th>
                    <td><?= h($funcionario->data_cadastro) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Contato') ?></h4>
                <?php if (!empty($funcionario->contato)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Numero Telefone') ?></th>
                            <th><?= __('Tipo Contato') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->contato as $contato) : ?>
                        <tr>
                            <td><?= h($contato->id) ?></td>
                            <td><?= h($contato->cliente_id) ?></td>
                            <td><?= h($contato->funcionario_id) ?></td>
                            <td><?= h($contato->numero_telefone) ?></td>
                            <td><?= h($contato->tipo_contato) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contato', 'action' => 'view', $contato->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contato', 'action' => 'edit', $contato->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contato', 'action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Controle Financeiro') ?></h4>
                <?php if (!empty($funcionario->controle_financeiro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Ganho Id') ?></th>
                            <th><?= __('Despesa Id') ?></th>
                            <th><?= __('Fechamento Mes') ?></th>
                            <th><?= __('Valor Liquido') ?></th>
                            <th><?= __('Data Lanc') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->controle_financeiro as $controleFinanceiro) : ?>
                        <tr>
                            <td><?= h($controleFinanceiro->id) ?></td>
                            <td><?= h($controleFinanceiro->funcionario_id) ?></td>
                            <td><?= h($controleFinanceiro->ganho_id) ?></td>
                            <td><?= h($controleFinanceiro->despesa_id) ?></td>
                            <td><?= h($controleFinanceiro->fechamento_mes) ?></td>
                            <td><?= h($controleFinanceiro->valor_liquido) ?></td>
                            <td><?= h($controleFinanceiro->data_lanc) ?></td>
                            <td><?= h($controleFinanceiro->ano) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ControleFinanceiro', 'action' => 'view', $controleFinanceiro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ControleFinanceiro', 'action' => 'edit', $controleFinanceiro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ControleFinanceiro', 'action' => 'delete', $controleFinanceiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controleFinanceiro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Despesa') ?></h4>
                <?php if (!empty($funcionario->despesa)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Valor Gasto') ?></th>
                            <th><?= __('Data Gasto') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->despesa as $despesa) : ?>
                        <tr>
                            <td><?= h($despesa->id) ?></td>
                            <td><?= h($despesa->funcionario_id) ?></td>
                            <td><?= h($despesa->produto_id) ?></td>
                            <td><?= h($despesa->valor_gasto) ?></td>
                            <td><?= h($despesa->data_gasto) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Despesa', 'action' => 'view', $despesa->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Despesa', 'action' => 'edit', $despesa->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Despesa', 'action' => 'delete', $despesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $despesa->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Hospedagem') ?></h4>
                <?php if (!empty($funcionario->hospedagem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Reserva Id') ?></th>
                            <th><?= __('Data Hosp') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Tipo Pagamento') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->hospedagem as $hospedagem) : ?>
                        <tr>
                            <td><?= h($hospedagem->id) ?></td>
                            <td><?= h($hospedagem->funcionario_id) ?></td>
                            <td><?= h($hospedagem->reserva_id) ?></td>
                            <td><?= h($hospedagem->data_hosp) ?></td>
                            <td><?= h($hospedagem->valor_total) ?></td>
                            <td><?= h($hospedagem->tipo_pagamento) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Hospedagem', 'action' => 'view', $hospedagem->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Hospedagem', 'action' => 'edit', $hospedagem->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hospedagem', 'action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reserva') ?></h4>
                <?php if (!empty($funcionario->reserva)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Quarto Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Data Reserva') ?></th>
                            <th><?= __('Data Entrada') ?></th>
                            <th><?= __('Data Saida') ?></th>
                            <th><?= __('Pessoas') ?></th>
                            <th><?= __('Criancas') ?></th>
                            <th><?= __('Status Res') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($funcionario->reserva as $reserva) : ?>
                        <tr>
                            <td><?= h($reserva->id) ?></td>
                            <td><?= h($reserva->cliente_id) ?></td>
                            <td><?= h($reserva->quarto_id) ?></td>
                            <td><?= h($reserva->funcionario_id) ?></td>
                            <td><?= h($reserva->data_reserva) ?></td>
                            <td><?= h($reserva->data_entrada) ?></td>
                            <td><?= h($reserva->data_saida) ?></td>
                            <td><?= h($reserva->pessoas) ?></td>
                            <td><?= h($reserva->criancas) ?></td>
                            <td><?= h($reserva->status_res) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reserva', 'action' => 'view', $reserva->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reserva', 'action' => 'edit', $reserva->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reserva', 'action' => 'delete', $reserva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserva->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>