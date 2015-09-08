<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Visit'), ['action' => 'edit', $visit->id]) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Visit'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Visits'), ['action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?> </li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Diagnoses'), ['controller' => 'Diagnoses', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Diagnosis'), ['controller' => 'Diagnoses', 'action' => 'add']) ?> </li>
                                <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?> </li>
                            </ul>
            </div>
    <div class="visits col-lg-10 col-md-9">
        <h2><?= h($visit->id) ?></h2>
        <div class="row">
                <div class="large-5 columns strings">
                        <h6 class="subheader"><?= __('Doctor') ?></h6>
                <p><?= $visit->has('doctor') ? $this->Html->link($visit->doctor->fullname, ['controller' => 'Doctors', 'action' => 'view', $visit->doctor->id]) : '' ?></p>
                            <h6 class="subheader"><?= __('Diagnosis') ?></h6>
                <p><?= $visit->has('diagnosis') ? $this->Html->link($visit->diagnosis->id, ['controller' => 'Diagnoses', 'action' => 'view', $visit->diagnosis->id]) : '' ?></p>
                    </div>
                    <div class="large-2 columns numbers end">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                <p><?= $this->Number->format($visit->id) ?></p>
                </div>
                    <div class="large-2 columns dates end">
                    <h6 class="subheader"><?= __('Visited') ?></h6>
                <p><?= h($visit->visited) ?></p>
                    <h6 class="subheader"><?= __('Created') ?></h6>
                <p><?= h($visit->created) ?></p>
                    <h6 class="subheader"><?= __('Modified') ?></h6>
                <p><?= h($visit->modified) ?></p>
                </div>
                </div>
        </div>
    </div>
</div>

<div class="related row">
    <div class="col-lg-12">
    <h4 class="subheader"><?= __('Related Medications') ?></h4>
    <?php if (!empty($visit->medications)): ?>
        <table class="table table-hover table-striped table-bordered small">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Medication') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($visit->medications as $medications): ?>
        <tr>
            <td><?= h($medications->id) ?></td>
            <td><?= h($medications->medication) ?></td>
            <td><?= h($medications->created) ?></td>
            <td><?= h($medications->modified) ?></td>
            <td>
                <?= $this->Html->link(__('View'), ['controller' => 'Medications', 'action' => 'view', $medications->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Medications', 'action' => 'edit', $medications->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Medications', 'action' => 'delete', $medications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medications->id)]) ?>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
