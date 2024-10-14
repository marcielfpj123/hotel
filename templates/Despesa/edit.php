<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Despesa $despesa
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 * @var string[]|\Cake\Collection\CollectionInterface $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $despesa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $despesa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Despesa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="despesa form content">
            <?= $this->Form->create($despesa) ?>
            <fieldset>
                <legend><?= __('Edit Despesa') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('produto_id', ['options' => $produto]);
                    echo $this->Form->control('valor_gasto');
                    echo $this->Form->control('data_gasto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
