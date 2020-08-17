<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ward $ward
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ward'), ['action' => 'edit', $ward->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ward'), ['action' => 'delete', $ward->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ward->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ward'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stations'), ['controller' => 'Stations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Station'), ['controller' => 'Stations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wards view large-9 medium-8 columns content">
    <h3><?= h($ward->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($ward->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $ward->has('area') ? $this->Html->link($ward->area->name, ['controller' => 'Areas', 'action' => 'view', $ward->area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ward->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Stations') ?></h4>
        <?php if (!empty($ward->stations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Ward Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ward->stations as $stations): ?>
            <tr>
                <td><?= h($stations->id) ?></td>
                <td><?= h($stations->name) ?></td>
                <td><?= h($stations->ward_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stations', 'action' => 'view', $stations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stations', 'action' => 'edit', $stations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stations', 'action' => 'delete', $stations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
