<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Specialties'),
                        ['controller' => 'Specialties', 'action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('specialty_id') ?></th>
                    <th><?= $this->Paginator->sort('hospital_id') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctors as $doctor): ?>
                    <tr>
                        <td><?= h($doctor->firstname) ?></td>
                        <td><?= h($doctor->lastname) ?></td>
                        <td>
                            <?= $doctor->has('specialty') ? $this->Html->link($doctor->specialty->specialty,
                                ['controller' => 'Specialties', 'action' => 'view', $doctor->specialty->id]) : '' ?>
                        </td>
                        <td>
                            <?= $doctor->has('hospital') ? $this->Html->link($doctor->hospital->hospital,
                                ['controller' => 'Hospitals', 'action' => 'view', $doctor->hospital->id]) : '' ?>
                        </td>
                        <td><?= h($doctor->address) ?></td>
                        <td><?= h($doctor->phone) ?></td>
                        <td>
                            <?= $this->Html->link('', ['action' => 'view', $doctor->id],
                                ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', ['action' => 'edit', $doctor->id],
                                ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $doctor->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $doctor->id),
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
