<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Medications Visit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medicationsVisits index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('medications_id') ?></th>
            <th><?= $this->Paginator->sort('visits_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($medicationsVisits as $medicationsVisit): ?>
        <tr>
            <td>
                <?= $medicationsVisit->has('medication') ? $this->Html->link($medicationsVisit->medication->id, ['controller' => 'Medications', 'action' => 'view', $medicationsVisit->medication->id]) : '' ?>
            </td>
            <td>
                <?= $medicationsVisit->has('visit') ? $this->Html->link($medicationsVisit->visit->id, ['controller' => 'Visits', 'action' => 'view', $medicationsVisit->visit->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $medicationsVisit->medications_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medicationsVisit->medications_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medicationsVisit->medications_id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicationsVisit->medications_id)]) ?>
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
