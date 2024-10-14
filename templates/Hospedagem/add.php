<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hospedagem $hospedagem
 * @var \Cake\Collection\CollectionInterface|string[] $funcionario
 * @var \Cake\Collection\CollectionInterface|string[] $reserva
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Hospedagem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospedagem form content">
            <?= $this->Form->create($hospedagem) ?>
            <fieldset>
                <legend><?= __('Add Hospedagem') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('reserva_id', ['options' => $reserva]);
                    echo $this->Form->control('data_hosp');
                    echo $this->Form->control('valor_total');
                    echo $this->Form->control('tipo_pagamento');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
