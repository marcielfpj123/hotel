<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contato'), ['action' => 'edit', $contato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contato'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contato'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="contato view content">
            <h3><?= h($contato->numero_telefone) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $contato->hasValue('cliente') ? $this->Html->link($contato->cliente->cpf, ['controller' => 'Cliente', 'action' => 'view', $contato->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $contato->hasValue('funcionario') ? $this->Html->link($contato->funcionario->cpf, ['controller' => 'Funcionario', 'action' => 'view', $contato->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero Telefone') ?></th>
                    <td><?= h($contato->numero_telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Contato') ?></th>
                    <td><?= h($contato->tipo_contato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contato->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>