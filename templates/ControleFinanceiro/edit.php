<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControleFinanceiro $controleFinanceiro
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 * @var string[]|\Cake\Collection\CollectionInterface $ganho
 * @var string[]|\Cake\Collection\CollectionInterface $despesa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $controleFinanceiro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $controleFinanceiro->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Controle Financeiro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="controleFinanceiro form content">
            <?= $this->Form->create($controleFinanceiro) ?>
            <fieldset>
                <legend><?= __('Edit Controle Financeiro') ?></legend>
                <?php
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario]);
                    echo $this->Form->control('ganho_id', ['options' => $ganho]);
                    echo $this->Form->control('despesa_id', ['options' => $despesa]);
                    echo $this->Form->control('fechamento_mes');
                    echo $this->Form->control('valor_liquido');
                    echo $this->Form->control('data_lanc');
                    echo $this->Form->control('ano');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
