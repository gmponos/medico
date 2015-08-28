<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="appointments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('appointment') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?= $this->Number->format($appointment->id) ?></td>
            <td><?= h($appointment->appointment) ?></td>
            <td><?= h($appointment->created) ?></td>
            <td><?= h($appointment->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
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
