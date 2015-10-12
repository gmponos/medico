<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Medication'), ['action' => 'edit', $medication->id]) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Medication'), ['action' => 'delete', $medication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['action' => 'add']) ?> </li>
                                        <li class="list-group-item"><?= $this->Html->link(__('List Treatments'), ['controller' => 'Treatments', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Treatment'), ['controller' => 'Treatments', 'action' => 'add']) ?> </li>
                                    </ul>
            </div>
        </div>
    <div class="medications col-lg-10 col-md-9">
        <h4><?= h($medication->medication) ?></h4>
        <div class="row">
                <div class="col-lg-6">
                        <h6 class="small"><?= __('Medication') ?></h6>
                <p><?= h($medication->medication) ?></p>
                    </div>
                    <div class="col-lg-2">
                    <h6 class="small"><?= __('Id') ?></h6>
                <p><?= $this->Number->format($medication->id) ?></p>
                </div>
                    <div class="col-lg-2">
                    <h6 class="small"><?= __('Created') ?></h6>
                <p><?= h($medication->created) ?></p>
                    <h6 class="small"><?= __('Modified') ?></h6>
                <p><?= h($medication->modified) ?></p>
                </div>
                </div>
                <div class="row">
            <div class="col-lg-9">
                <h6 class="small"><?= __('Description') ?></h6>
                <?= $this->Text->autoParagraph(h($medication->description)) ?>
            </div>
        </div>
            </div>
</div>

<div class="related row">
    <div class="col-lg-12">
    <h4><?= __('Related Treatments') ?></h4>
    <?php if (!empty($medication->treatments)): ?>
        <table class="table table-hover table-striped table-bordered small">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Medication Id') ?></th>
            <th><?= __('Visit Id') ?></th>
            <th><?= __('Treatment') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($medication->treatments as $treatments): ?>
        <tr>
            <td><?= h($treatments->id) ?></td>
            <td><?= h($treatments->medication_id) ?></td>
            <td><?= h($treatments->visit_id) ?></td>
            <td><?= h($treatments->treatment) ?></td>
            <td><?= h($treatments->created) ?></td>
            <td><?= h($treatments->modified) ?></td>
            <td>
                <?= $this->Html->link(__('View'), ['controller' => 'Treatments', 'action' => 'view', $treatments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Treatments', 'action' => 'edit', $treatments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Treatments', 'action' => 'delete', $treatments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $treatments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
