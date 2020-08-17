<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipality $municipality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Municipality'), ['action' => 'edit', $municipality->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Municipality'), ['action' => 'delete', $municipality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $municipality->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Municipalities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="municipalities view large-9 medium-8 columns content">
    <h3><?= h($municipality->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($municipality->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= $municipality->has('province') ? $this->Html->link($municipality->province->name, ['controller' => 'Provinces', 'action' => 'view', $municipality->province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($municipality->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Areas') ?></h4>
        <?php if (!empty($municipality->areas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Municipality Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($municipality->areas as $areas): ?>
            <tr>
                <td><?= h($areas->id) ?></td>
                <td><?= h($areas->name) ?></td>
                <td><?= h($areas->municipality_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Areas', 'action' => 'view', $areas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Areas', 'action' => 'edit', $areas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Areas', 'action' => 'delete', $areas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
