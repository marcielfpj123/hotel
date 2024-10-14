<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contato $contato
 * @var string[]|\Cake\Collection\CollectionInterface $cliente
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contato->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contato'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="contato form content">
            <?= $this->Form->create($contato) ?>
            <fieldset>
                <legend><?= __('Edit Contato') ?></legend>
                <?php
                    echo $this->Form->control('cliente_id', ['options' => $cliente, 'empty' => true]);
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario, 'empty' => true]);
                    echo $this->Form->control('numero_telefone');
                    echo $this->Form->control('tipo_contato');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
