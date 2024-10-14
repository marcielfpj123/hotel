<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contato> $contato
 */
?>
<div class="contato index content">
    <?= $this->Html->link(__('New Contato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contato') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th><?= $this->Paginator->sort('numero_telefone') ?></th>
                    <th><?= $this->Paginator->sort('tipo_contato') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contato as $contato): ?>
                <tr>
                    <td><?= $this->Number->format($contato->id) ?></td>
                    <td><?= $contato->hasValue('cliente') ? $this->Html->link($contato->cliente->cpf, ['controller' => 'Cliente', 'action' => 'view', $contato->cliente->id]) : '' ?></td>
                    <td><?= $contato->hasValue('funcionario') ? $this->Html->link($contato->funcionario->cpf, ['controller' => 'Funcionario', 'action' => 'view', $contato->funcionario->id]) : '' ?></td>
                    <td><?= h($contato->numero_telefone) ?></td>
                    <td><?= h($contato->tipo_contato) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contato->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contato->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?>
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