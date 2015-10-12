<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Treatments'),
                        ['controller' => 'Treatments', 'action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('medication') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medications as $medication): ?>
                    <tr>
                        <td><?= h($medication->medication) ?></td>
                        <td><?= h($medication->description) ?></td>
                        <td>
                            <?= $this->Html->link('', ['action' => 'view', $medication->id],
                                ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', ['action' => 'edit', $medication->id],
                                ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $medication->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $medication->id),
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