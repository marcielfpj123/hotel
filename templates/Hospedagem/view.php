<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hospedagem $hospedagem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hospedagem'), ['action' => 'edit', $hospedagem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hospedagem'), ['action' => 'delete', $hospedagem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hospedagem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hospedagem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospedagem view content">
            <h3><?= h($hospedagem->tipo_pagamento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $hospedagem->hasValue('funcionario') ? $this->Html->link($hospedagem->funcionario->cpf, ['controller' => 'Funcionario', 'action' => 'view', $hospedagem->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reserva') ?></th>
                    <td><?= $hospedagem->hasValue('reserva') ? $this->Html->link($hospedagem->reserva->id, ['controller' => 'Reserva', 'action' => 'view', $hospedagem->reserva->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Pagamento') ?></th>
                    <td><?= h($hospedagem->tipo_pagamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hospedagem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Total') ?></th>
                    <td><?= $this->Number->format($hospedagem->valor_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Hosp') ?></th>
                    <td><?= h($hospedagem->data_hosp) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ganho') ?></h4>
                <?php if (!empty($hospedagem->ganho)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Hospedagem Id') ?></th>
                            <th><?= __('Valor Ganho') ?></th>
                            <th><?= __('Data Ganho') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospedagem->ganho as $ganho) : ?>
                        <tr>
                            <td><?= h($ganho->id) ?></td>
                            <td><?= h($ganho->hospedagem_id) ?></td>
                            <td><?= h($ganho->valor_ganho) ?></td>
                            <td><?= h($ganho->data_ganho) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ganho', 'action' => 'view', $ganho->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ganho', 'action' => 'edit', $ganho->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ganho', 'action' => 'delete', $ganho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ganho->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Hospedagem Produtos') ?></h4>
                <?php if (!empty($hospedagem->hospedagem_produtos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Hospedagem Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospedagem->hospedagem_produtos as $hospedagemProduto) : ?>
                        <tr>
                            <td><?= h($hospedagemProduto->hospedagem_id) ?></td>
                            <td><?= h($hospedagemProduto->produto_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'HospedagemProdutos', 'action' => 'view', $hospedagemProduto->hospedagem_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'HospedagemProdutos', 'action' => 'edit', $hospedagemProduto->hospedagem_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'HospedagemProdutos', 'action' => 'delete', $hospedagemProduto->hospedagem_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagemProduto->hospedagem_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Hospedagem Servicos') ?></h4>
                <?php if (!empty($hospedagem->hospedagem_servicos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Hospedagem Id') ?></th>
                            <th><?= __('Servico Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hospedagem->hospedagem_servicos as $hospedagemServico) : ?>
                        <tr>
                            <td><?= h($hospedagemServico->hospedagem_id) ?></td>
                            <td><?= h($hospedagemServico->servico_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'HospedagemServicos', 'action' => 'view', $hospedagemServico->hospedagem_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'HospedagemServicos', 'action' => 'edit', $hospedagemServico->hospedagem_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'HospedagemServicos', 'action' => 'delete', $hospedagemServico->hospedagem_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagemServico->hospedagem_id)]) ?>
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