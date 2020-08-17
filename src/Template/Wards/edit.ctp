<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ward $ward
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ward->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ward->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wards'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stations'), ['controller' => 'Stations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Station'), ['controller' => 'Stations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wards form large-9 medium-8 columns content">
    <?= $this->Form->create($ward) ?>
    <fieldset>
        <legend><?= __('Edit Ward') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('area_id', ['options' => $areas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
