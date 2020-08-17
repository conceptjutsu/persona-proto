<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wards'), ['controller' => 'Wards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ward'), ['controller' => 'Wards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areas form large-9 medium-8 columns content">
    <?= $this->Form->create($area) ?>
    <fieldset>
        <legend><?= __('Add Area') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('municipality_id', ['options' => $municipalities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
