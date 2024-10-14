<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ganho $ganho
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ganho'), ['action' => 'edit', $ganho->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ganho'), ['action' => 'delete', $ganho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ganho->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ganho'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ganho'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ganho view content">
            <h3><?= h($ganho->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hospedagem') ?></th>
                    <td><?= $ganho->hasValue('hospedagem') ? $this->Html->link($ganho->hospedagem->tipo_pagamento, ['controller' => 'Hospedagem', 'action' => 'view', $ganho->hospedagem->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ganho->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Ganho') ?></th>
                    <td><?= $this->Number->format($ganho->valor_ganho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Ganho') ?></th>
                    <td><?= h($ganho->data_ganho) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Controle Financeiro') ?></h4>
                <?php if (!empty($ganho->controle_financeiro)) : ?>
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
                        <?php foreach ($ganho->controle_financeiro as $controleFinanceiro) : ?>
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
        </div>
    </div>
</div>