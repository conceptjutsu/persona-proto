<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipalities'), ['controller' => 'Municipalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipality'), ['controller' => 'Municipalities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wards'), ['controller' => 'Wards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ward'), ['controller' => 'Wards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areas view large-9 medium-8 columns content">
    <h3><?= h($area->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($area->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipality') ?></th>
            <td><?= $area->has('municipality') ? $this->Html->link($area->municipality->name, ['controller' => 'Municipalities', 'action' => 'view', $area->municipality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($area->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Wards') ?></h4>
        <?php if (!empty($area->wards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($area->wards as $wards): ?>
            <tr>
                <td><?= h($wards->id) ?></td>
                <td><?= h($wards->code) ?></td>
                <td><?= h($wards->area_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Wards', 'action' => 'view', $wards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Wards', 'action' => 'edit', $wards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wards', 'action' => 'delete', $wards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
