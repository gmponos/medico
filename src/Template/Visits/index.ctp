<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
                <tr>
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
                        <td><?= h($visit->visited) ?></td>
                        <td>
                            <?= $visit->has('doctor') ? $this->Html->link($visit->doctor->fullname,
                                ['controller' => 'Doctors', 'action' => 'view', $visit->doctor->id]) : '' ?>
                        </td>
                        <td>
                            <?= $visit->has('diagnosis') ? $this->Html->link($visit->diagnosis->id,
                                ['controller' => 'Diagnoses', 'action' => 'view', $visit->diagnosis->id]) : '' ?>
                        </td>
                        <td><?= h($visit->created) ?></td>
                        <td><?= h($visit->modified) ?></td>
                        <td>
                            <?= $this->Html->link('', ['action' => 'view', $visit->id],
                                ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', ['action' => 'edit', $visit->id],
                                ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $visit->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $visit->id),
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