<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Despesa> $despesa
 */
?>
<div class="despesa index content">
    <?= $this->Html->link(__('New Despesa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Despesa') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th><?= $this->Paginator->sort('valor_gasto') ?></th>
                    <th><?= $this->Paginator->sort('data_gasto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($despesa as $despesa): ?>
                <tr>
                    <td><?= $this->Number->format($despesa->id) ?></td>
                    <td><?= $despesa->hasValue('funcionario') ? $this->Html->link($despesa->funcionario->cpf, ['controller' => 'Funcionario', 'action' => 'view', $despesa->funcionario->id]) : '' ?></td>
                    <td><?= $despesa->hasValue('produto') ? $this->Html->link($despesa->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $despesa->produto->id]) : '' ?></td>
                    <td><?= $this->Number->format($despesa->valor_gasto) ?></td>
                    <td><?= h($despesa->data_gasto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $despesa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $despesa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $despesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $despesa->id)]) ?>
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