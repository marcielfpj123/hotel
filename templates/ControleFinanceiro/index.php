<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ControleFinanceiro> $controleFinanceiro
 */
?>
<div class="controleFinanceiro index content">
    <?= $this->Html->link(__('New Controle Financeiro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Controle Financeiro') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('ganho_id') ?></th>
                    <th><?= $this->Paginator->sort('despesa_id') ?></th>
                    <th><?= $this->Paginator->sort('fechamento_mes') ?></th>
                    <th><?= $this->Paginator->sort('valor_liquido') ?></th>
                    <th><?= $this->Paginator->sort('data_lanc') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($controleFinanceiro as $controleFinanceiro): ?>
                <tr>
                    <td><?= $this->Number->format($controleFinanceiro->id) ?></td>
                    <td><?= $controleFinanceiro->hasValue('funcionario') ? $this->Html->link($controleFinanceiro->funcionario->cpf, ['controller' => 'Funcionario', 'action' => 'view', $controleFinanceiro->funcionario->id]) : '' ?></td>
                    <td><?= $controleFinanceiro->hasValue('ganho') ? $this->Html->link($controleFinanceiro->ganho->id, ['controller' => 'Ganho', 'action' => 'view', $controleFinanceiro->ganho->id]) : '' ?></td>
                    <td><?= $controleFinanceiro->hasValue('despesa') ? $this->Html->link($controleFinanceiro->despesa->id, ['controller' => 'Despesa', 'action' => 'view', $controleFinanceiro->despesa->id]) : '' ?></td>
                    <td><?= h($controleFinanceiro->fechamento_mes) ?></td>
                    <td><?= $this->Number->format($controleFinanceiro->valor_liquido) ?></td>
                    <td><?= h($controleFinanceiro->data_lanc) ?></td>
                    <td><?= h($controleFinanceiro->ano) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $controleFinanceiro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controleFinanceiro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controleFinanceiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controleFinanceiro->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>