<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Medication'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medications index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('medication') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('medicationscol') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($medications as $medication): ?>
        <tr>
            <td><?= $this->Number->format($medication->id) ?></td>
            <td><?= h($medication->medication) ?></td>
            <td><?= h($medication->created) ?></td>
            <td><?= h($medication->modified) ?></td>
            <td><?= h($medication->medicationscol) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $medication->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medication->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id)]) ?>
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
