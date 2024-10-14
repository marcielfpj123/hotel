<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="produto view content">
            <h3><?= h($produto->tipo_produto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Produto') ?></th>
                    <td><?= h($produto->tipo_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= h($produto->produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($produto->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produto->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Hospedagem') ?></h4>
                <?php if (!empty($produto->hospedagem)) : ?>
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
                        <?php foreach ($produto->hospedagem as $hospedagem) : ?>
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
                <h4><?= __('Related Despesa') ?></h4>
                <?php if (!empty($produto->despesa)) : ?>
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
                        <?php foreach ($produto->despesa as $despesa) : ?>
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
                <h4><?= __('Related Estoque') ?></h4>
                <?php if (!empty($produto->estoque)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Ifuncionario Id') ?></th>
                            <th><?= __('Data Baixa') ?></th>
                            <th><?= __('Data Lanc') ?></th>
                            <th><?= __('Tipo Operacao') ?></th>
                            <th><?= __('Quant') ?></th>
                            <th><?= __('Obs') ?></th>
                            <th><?= __('Num Fiscal') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($produto->estoque as $estoque) : ?>
                        <tr>
                            <td><?= h($estoque->id) ?></td>
                            <td><?= h($estoque->produto_id) ?></td>
                            <td><?= h($estoque->ifuncionario_id) ?></td>
                            <td><?= h($estoque->data_baixa) ?></td>
                            <td><?= h($estoque->data_lanc) ?></td>
                            <td><?= h($estoque->tipo_operacao) ?></td>
                            <td><?= h($estoque->quant) ?></td>
                            <td><?= h($estoque->obs) ?></td>
                            <td><?= h($estoque->num_fiscal) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Estoque', 'action' => 'view', $estoque->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Estoque', 'action' => 'edit', $estoque->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estoque', 'action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
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