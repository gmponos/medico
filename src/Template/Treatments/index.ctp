<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Treatment'), ['action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
                            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('medication_id') ?></th>
                                <th><?= $this->Paginator->sort('visit_id') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($treatments as $treatment): ?>
            <tr>
                                <td><?= $this->Number->format($treatment->id) ?></td>
                                <td>
                    <?= $treatment->has('medication') ? $this->Html->link($treatment->medication->id, ['controller' => 'Medications', 'action' => 'view', $treatment->medication->id]) : '' ?>
                </td>
                                <td>
                    <?= $treatment->has('visit') ? $this->Html->link($treatment->visit->id, ['controller' => 'Visits', 'action' => 'view', $treatment->visit->id]) : '' ?>
                </td>
                                <td><?= h($treatment->created) ?></td>
                                <td><?= h($treatment->modified) ?></td>
                                <td>
                    <?= $this->Html->link('', ['action' => 'view', $treatment->id], ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                    <?= $this->Html->link('', ['action' => 'edit', $treatment->id], ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $treatment->id], [
                            'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                            'confirm' => __('Are you sure you want to delete # {0}?', $treatment->id)
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