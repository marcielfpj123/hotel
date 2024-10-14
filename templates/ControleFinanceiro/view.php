<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControleFinanceiro $controleFinanceiro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Controle Financeiro'), ['action' => 'edit', $controleFinanceiro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Controle Financeiro'), ['action' => 'delete', $controleFinanceiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controleFinanceiro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Controle Financeiro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Controle Financeiro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="controleFinanceiro view content">
            <h3><?= h($controleFinanceiro->fechamento_mes) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $controleFinanceiro->hasValue('funcionario') ? $this->Html->link($controleFinanceiro->funcionario->cpf, ['controller' => 'Funcionario', 'action' => 'view', $controleFinanceiro->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganho') ?></th>
                    <td><?= $controleFinanceiro->hasValue('ganho') ? $this->Html->link($controleFinanceiro->ganho->id, ['controller' => 'Ganho', 'action' => 'view', $controleFinanceiro->ganho->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Despesa') ?></th>
                    <td><?= $controleFinanceiro->hasValue('despesa') ? $this->Html->link($controleFinanceiro->despesa->id, ['controller' => 'Despesa', 'action' => 'view', $controleFinanceiro->despesa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechamento Mes') ?></th>
                    <td><?= h($controleFinanceiro->fechamento_mes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= h($controleFinanceiro->ano) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($controleFinanceiro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Liquido') ?></th>
                    <td><?= $this->Number->format($controleFinanceiro->valor_liquido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lanc') ?></th>
                    <td><?= h($controleFinanceiro->data_lanc) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>