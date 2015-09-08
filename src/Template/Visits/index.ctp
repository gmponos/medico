<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Diagnoses'), ['controller' => 'Diagnoses', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Diagnosis'), ['controller' => 'Diagnoses', 'action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
                            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('visited') ?></th>
                                <th><?= $this->Paginator->sort('doctor_id') ?></th>
                                <th><?= $this->Paginator->sort('diagnose_id') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($visits as $visit): ?>
            <tr>
                                <td><?= $this->Number->format($visit->id) ?></td>
                                <td><?= h($visit->visited) ?></td>
                                <td>
                    <?= $visit->has('doctor') ? $this->Html->link($visit->doctor->fullname, ['controller' => 'Doctors', 'action' => 'view', $visit->doctor->id]) : '' ?>
                </td>
                                <td>
                    <?= $visit->has('diagnosis') ? $this->Html->link($visit->diagnosis->id, ['controller' => 'Diagnoses', 'action' => 'view', $visit->diagnosis->id]) : '' ?>
                </td>
                                <td><?= h($visit->created) ?></td>
                                <td><?= h($visit->modified) ?></td>
                                <td>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $visit->id], ['icon' => 'search']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visit->id], ['icon' => 'pencil']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visit->id], 
                        [
                            'icon' => 'times',
                            'confirm' => __('Are you sure you want to delete # {0}?', $visit->id)
                        ])
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