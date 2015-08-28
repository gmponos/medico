<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="specialties index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('specialty') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($specialties as $specialty): ?>
        <tr>
            <td><?= $this->Number->format($specialty->id) ?></td>
            <td><?= h($specialty->specialty) ?></td>
            <td><?= h($specialty->created) ?></td>
            <td><?= h($specialty->updated) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $specialty->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $specialty->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $specialty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]) ?>
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
