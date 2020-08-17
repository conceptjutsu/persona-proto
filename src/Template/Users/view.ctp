<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genders'), ['controller' => 'Genders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gender'), ['controller' => 'Genders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stations'), ['controller' => 'Stations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Station'), ['controller' => 'Stations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Number') ?></th>
            <td><?= h($user->id_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $user->has('gender') ? $this->Html->link($user->gender->name, ['controller' => 'Genders', 'action' => 'view', $user->gender->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Address') ?></th>
            <td><?= h($user->street_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('House Address') ?></th>
            <td><?= h($user->house_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Town') ?></th>
            <td><?= h($user->town) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($user->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $user->has('status') ? $this->Html->link($user->status->name, ['controller' => 'Statuses', 'action' => 'view', $user->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Station') ?></th>
            <td><?= $user->has('station') ? $this->Html->link($user->station->name, ['controller' => 'Stations', 'action' => 'view', $user->station->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent User') ?></th>
            <td><?= $user->has('parent_user') ? $this->Html->link($user->parent_user->id, ['controller' => 'Users', 'action' => 'view', $user->parent_user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postcode') ?></th>
            <td><?= $this->Number->format($user->postcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Verified At') ?></th>
            <td><?= h($user->email_verified_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Birth') ?></th>
            <td><?= h($user->date_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Time Voter') ?></th>
            <td><?= $user->first_time_voter ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $user->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($user->child_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Email Verified At') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('First Time Voter') ?></th>
                <th scope="col"><?= __('Id Number') ?></th>
                <th scope="col"><?= __('Date Of Birth') ?></th>
                <th scope="col"><?= __('Gender Id') ?></th>
                <th scope="col"><?= __('Street Address') ?></th>
                <th scope="col"><?= __('House Address') ?></th>
                <th scope="col"><?= __('Town') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Postcode') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Station Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->child_users as $childUsers): ?>
            <tr>
                <td><?= h($childUsers->id) ?></td>
                <td><?= h($childUsers->first_name) ?></td>
                <td><?= h($childUsers->last_name) ?></td>
                <td><?= h($childUsers->email) ?></td>
                <td><?= h($childUsers->email_verified_at) ?></td>
                <td><?= h($childUsers->phone) ?></td>
                <td><?= h($childUsers->password) ?></td>
                <td><?= h($childUsers->first_time_voter) ?></td>
                <td><?= h($childUsers->id_number) ?></td>
                <td><?= h($childUsers->date_of_birth) ?></td>
                <td><?= h($childUsers->gender_id) ?></td>
                <td><?= h($childUsers->street_address) ?></td>
                <td><?= h($childUsers->house_address) ?></td>
                <td><?= h($childUsers->town) ?></td>
                <td><?= h($childUsers->city) ?></td>
                <td><?= h($childUsers->postcode) ?></td>
                <td><?= h($childUsers->role_id) ?></td>
                <td><?= h($childUsers->status_id) ?></td>
                <td><?= h($childUsers->station_id) ?></td>
                <td><?= h($childUsers->parent_id) ?></td>
                <td><?= h($childUsers->is_active) ?></td>
                <td><?= h($childUsers->created) ?></td>
                <td><?= h($childUsers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $childUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $childUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $childUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
