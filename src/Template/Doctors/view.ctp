<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Edit Doctor'),
                        ['action' => 'edit', $doctor->id]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Delete Doctor'),
                        ['action' => 'delete', $doctor->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Specialties'),
                        ['controller' => 'Specialties', 'action' => 'index']) ?> </li>
            </ul>
        </div>
    </div>
    <div class="doctors col-lg-10 col-md-9">
        <h4><?= h($doctor->fullname) ?></h4>

        <div class="row">
            <div class="col-lg-6">
                <h6 class="small"><?= __('Firstname') ?></h6>

                <p><?= h($doctor->firstname) ?></p>
                <h6 class="small"><?= __('Lastname') ?></h6>

                <p><?= h($doctor->lastname) ?></p>
                <h6 class="small"><?= __('Specialty') ?></h6>

                <p><?= $doctor->has('specialty') ? $this->Html->link($doctor->specialty->specialty,
                        ['controller' => 'Specialties', 'action' => 'view', $doctor->specialty->id]) : '' ?></p>
                <h6 class="small"><?= __('Address') ?></h6>

                <p><?= h($doctor->address) ?></p>
                <h6 class="small"><?= __('Phone') ?></h6>

                <p><?= h($doctor->phone) ?></p>
                <h6 class="small"><?= __('City') ?></h6>

                <p><?= h($doctor->city) ?></p>
                <h6 class="small"><?= __('Cellphone') ?></h6>

                <p><?= h($doctor->cellphone) ?></p>
            </div>
            <div class="col-lg-2">
                <h6 class="small"><?= __('Id') ?></h6>

                <p><?= $this->Number->format($doctor->id) ?></p>
            </div>
            <div class="col-lg-2">
                <h6 class="small"><?= __('Created') ?></h6>

                <p><?= h($doctor->created) ?></p>
                <h6 class="small"><?= __('Modified') ?></h6>

                <p><?= h($doctor->modified) ?></p>
            </div>
        </div>
    </div>
</div>

<div class="related row">
    <div class="col-lg-12">
        <h4><?= __('Related Visits') ?></h4>
        <table class="table table-hover table-striped table-bordered small">
            <tr>
                <th><?= __('Reason') ?></th>
                <th><?= __('Visited') ?></th>
                <th><?= __('Doctor Id') ?></th>
                <th><?= __('Diagnose Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            <?php if (!empty($doctor->visits)): ?>

                <?php foreach ($doctor->visits as $visits): ?>
                    <tr>
                        <td><?= h($visits->reason) ?></td>
                        <td><?= h($visits->visited) ?></td>
                        <td><?= h($visits->doctor_id) ?></td>
                        <td><?= h($visits->diagnose_id) ?></td>
                        <td><?= h($visits->created) ?></td>
                        <td><?= h($visits->modified) ?></td>
                        <td>
                            <?= $this->Html->link(__('View'),
                                ['controller' => 'Visits', 'action' => 'view', $visits->id]) ?>

                            <?= $this->Html->link(__('Edit'),
                                ['controller' => 'Visits', 'action' => 'edit', $visits->id]) ?>

                            <?= $this->Form->postLink(__('Delete'),
                                ['controller' => 'Visits', 'action' => 'delete', $visits->id],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $visits->id)]) ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
        <h4><?= __('Related Appointments') ?></h4>
        <table class="table table-hover table-striped table-bordered small">
            <tr>
                <th><?= __('Appointment') ?></th>
                <th><?= __('Reason') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            <?php if (!empty($doctor->appointments)): ?>

                <?php foreach ($doctor->appointments as $appointment): ?>
                    <tr>
                        <td><?= h($appointment->appointment) ?></td>
                        <td><?= h($appointment->reason) ?></td>
                        <td><?= h($appointment->created) ?></td>
                        <td><?= h($appointment->modified) ?></td>
                        <td>
                            <?= $this->Html->link('', ['action' => 'view', $appointment->id],
                                ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', ['action' => 'edit', $appointment->id],
                                ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $appointment->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $appointment->id),
                            ]);
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>
