<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Visit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diagnoses'), ['controller' => 'Diagnoses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diagnosis'), ['controller' => 'Diagnoses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="visits index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('visited') ?></th>
            <th><?= $this->Paginator->sort('doctor_id') ?></th>
            <th><?= $this->Paginator->sort('diagnose_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($visits as $visit): ?>
        <tr>
            <td><?= $this->Number->format($visit->id) ?></td>
            <td><?= h($visit->visited) ?></td>
            <td>
                <?= $visit->has('doctor') ? $this->Html->link($visit->doctor->id, ['controller' => 'Doctors', 'action' => 'view', $visit->doctor->id]) : '' ?>
            </td>
            <td>
                <?= $visit->has('diagnosis') ? $this->Html->link($visit->diagnosis->id, ['controller' => 'Diagnoses', 'action' => 'view', $visit->diagnosis->id]) : '' ?>
            </td>
            <td><?= h($visit->created) ?></td>
            <td><?= h($visit->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $visit->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visit->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
