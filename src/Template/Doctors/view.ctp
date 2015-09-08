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
                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Specialties'),
                        ['controller' => 'Specialties', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Specialty'),
                        ['controller' => 'Specialties', 'action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Visits'),
                        ['controller' => 'Visits', 'action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Visit'),
                        ['controller' => 'Visits', 'action' => 'add']) ?> </li>
            </ul>
        </div>
        <div class="doctors col-lg-10 col-md-9">
            <h2><?= h($doctor->id) ?></h2>

            <div class="row">
                <div class="large-5 columns strings">
                    <h6 class="subheader"><?= __('Firstname') ?></h6>

                    <p><?= h($doctor->firstname) ?></p>
                    <h6 class="subheader"><?= __('Lastname') ?></h6>

                    <p><?= h($doctor->lastname) ?></p>
                    <h6 class="subheader"><?= __('Specialty') ?></h6>

                    <p><?= $doctor->has('specialty') ? $this->Html->link($doctor->specialty->id,
                            ['controller' => 'Specialties', 'action' => 'view', $doctor->specialty->id]) : '' ?></p>
                    <h6 class="subheader"><?= __('Address') ?></h6>

                    <p><?= h($doctor->address) ?></p>
                    <h6 class="subheader"><?= __('Phone') ?></h6>

                    <p><?= h($doctor->phone) ?></p>
                    <h6 class="subheader"><?= __('City') ?></h6>

                    <p><?= h($doctor->city) ?></p>
                    <h6 class="subheader"><?= __('Cellphone') ?></h6>

                    <p><?= h($doctor->cellphone) ?></p>
                </div>
                <div class="large-2 columns numbers end">
                    <h6 class="subheader"><?= __('Id') ?></h6>

                    <p><?= $this->Number->format($doctor->id) ?></p>
                </div>
                <div class="large-2 columns dates end">
                    <h6 class="subheader"><?= __('Created') ?></h6>

                    <p><?= h($doctor->created) ?></p>
                    <h6 class="subheader"><?= __('Updated') ?></h6>

                    <p><?= h($doctor->updated) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="related row">
    <div class="col-lg-12">
        <h4 class="subheader"><?= __('Related Visits') ?></h4>
        <?php if (!empty($doctor->visits)): ?>
            <table class="table table-hover table-striped table-bordered small">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Reason') ?></th>
                    <th><?= __('Visited') ?></th>
                    <th><?= __('Doctor Id') ?></th>
                    <th><?= __('Diagnose Id') ?></th>
                    <th><?= __('Created') ?></th>
                    <th><?= __('Updated') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($doctor->visits as $visits): ?>
                    <tr>
                        <td><?= h($visits->id) ?></td>
                        <td><?= h($visits->reason) ?></td>
                        <td><?= h($visits->visited) ?></td>
                        <td><?= h($visits->doctor_id) ?></td>
                        <td><?= h($visits->diagnose_id) ?></td>
                        <td><?= h($visits->created) ?></td>
                        <td><?= h($visits->updated) ?></td>

                        <td class="actions">
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
            </table>
        <?php endif; ?>
    </div>
</div>
