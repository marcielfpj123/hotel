<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Funcionario> $funcionario
 */
?>
<div class="funcionario index content">
    <?= $this->Html->link(__('New Funcionario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Funcionario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('doc_pessoal') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('data_nasc') ?></th>
                    <th><?= $this->Paginator->sort('funcao') ?></th>
                    <th><?= $this->Paginator->sort('salario') ?></th>
                    <th><?= $this->Paginator->sort('avaliacao') ?></th>
                    <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionario as $funcionario): ?>
                <tr>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                    <td><?= h($funcionario->cpf) ?></td>
                    <td><?= h($funcionario->doc_pessoal) ?></td>
                    <td><?= h($funcionario->nome) ?></td>
                    <td><?= h($funcionario->endereco) ?></td>
                    <td><?= h($funcionario->data_nasc) ?></td>
                    <td><?= h($funcionario->funcao) ?></td>
                    <td><?= $this->Number->format($funcionario->salario) ?></td>
                    <td><?= h($funcionario->avaliacao) ?></td>
                    <td><?= h($funcionario->data_cadastro) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?>
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