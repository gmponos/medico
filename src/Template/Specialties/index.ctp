<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('specialty') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specialties as $specialty): ?>
                    <tr>
                        <td><?= h($specialty->specialty) ?></td>
                        <td>
                            <?= $this->Html->link('', ['action' => 'view', $specialty->id],
                                ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', ['action' => 'edit', $specialty->id],
                                ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('', ['action' => 'delete', $specialty->id], [
                                'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                'confirm' => __('Are you sure you want to delete # {0}?', $specialty->id),
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