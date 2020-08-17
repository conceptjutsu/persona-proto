<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipality $municipality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $municipality->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $municipality->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Municipalities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipalities form large-9 medium-8 columns content">
    <?= $this->Form->create($municipality) ?>
    <fieldset>
        <legend><?= __('Edit Municipality') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('province_id', ['options' => $provinces]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
