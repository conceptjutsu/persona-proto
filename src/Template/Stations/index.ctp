<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Station[]|\Cake\Collection\CollectionInterface $stations
 */
$this->assign('title', __('Stations'));
?>

<?php $this->start('asa_nav'); ?>


<!--begin::Toolbar-->
        <div class="d-flex align-items-center">
			<!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-s"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
				</a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
					<!--begin::Navigation-->
					<ul class="navi navi-hover">
					    <li class="navi-header font-weight-bold py-4">
					        <span class="font-size-lg">Choose Label:</span>
					        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
					    </li>

					    <li class="navi-separator mb-3 opacity-70"></li>

        <li class="navi-item"><?= $this->Html->link(__('New Station'), ['action' => 'add'], ['class' => 'navi-link']) ?></li>
        <li class="navi-item"><?= $this->Html->link(__('List Wards'), ['controller' => 'Wards', 'action' => 'index'], ['class' => 'navi-link']) ?></li>
        <li class="navi-item"><?= $this->Html->link(__('New Ward'), ['controller' => 'Wards', 'action' => 'add'], ['class' => 'navi-link']) ?></li>
        <li class="navi-item"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'navi-link']) ?></li>
        <li class="navi-item"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'navi-link']) ?></li>


					</ul>
					<!--end::Navigation-->

                </div>
            </div>
			<!--end::Dropdown-->
        </div>
		<!--end::Toolbar-->

<?php $this->end(); ?>

<div class="card card-custom stations">
    <div class="card-header">
        <div class="card-title">
            <h3><?= __('Stations') ?></h3>
        </div>
    </div>

    <div class="card-body">
       <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ward_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stations as $station): ?>
            <tr>
                <td><?= $this->Number->format($station->id) ?></td>
                <td><?= h($station->name) ?></td>
                <td><?= $station->has('ward') ? $this->Html->link($station->ward->code, ['controller' => 'Wards', 'action' => 'view', $station->ward->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $station->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $station->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $station->id], ['confirm' => __('Are you sure you want to delete # {0}?', $station->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="card-footer">
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
</div>

