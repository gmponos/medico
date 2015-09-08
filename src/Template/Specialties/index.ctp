<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?></li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
                            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('specialty') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('updated') ?></th>
                                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($specialties as $specialty): ?>
            <tr>
                                <td><?= $this->Number->format($specialty->id) ?></td>
                                <td><?= h($specialty->specialty) ?></td>
                                <td><?= h($specialty->created) ?></td>
                                <td><?= h($specialty->updated) ?></td>
                                <td>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $specialty->id], ['icon' => 'search']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $specialty->id], ['icon' => 'pencil']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $specialty->id], 
                        [
                            'icon' => 'times',
                            'confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)
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