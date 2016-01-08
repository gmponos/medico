<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), [
                        'controller' => 'Doctors',
                        'action' => 'index',
                    ]) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), [
                        'controller' => 'Doctors',
                        'action' => 'add',
                    ]) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('doctor_id') ?></th>
                    <th><?= $this->Paginator->sort('appointment') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $appointment): ?>
                    <tr>
                        <td><?= $this->Number->format($appointment->id) ?></td>
                        <td>
                            <?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->fullname, [
                                'controller' => 'Doctors',
                                'action' => 'view',
                                $appointment->doctor->id,
                            ]) : '' ?>
                        </td>
                        <td><?= h($appointment->appointment) ?></td>
                        <td><?= h($appointment->created) ?></td>
                        <td><?= h($appointment->modified) ?></td>
                        <td>
                            <?= $this->Html->link('', [
                                'action' => 'view',
                                $appointment->id,
                            ], ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', [
                                'action' => 'edit',
                                $appointment->id,
                            ], ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $appointment->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $appointment->id),
                            ]);
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <?= $this->element('CakeBootstrap.pagination') ?>
            <?= $this->element('CakeBootstrap.paging') ?>
        </div>
    </div>
</div>