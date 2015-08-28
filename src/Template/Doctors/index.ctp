<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="doctors index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('firstname') ?></th>
            <th><?= $this->Paginator->sort('lastname') ?></th>
            <th><?= $this->Paginator->sort('specialty_id') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('phone') ?></th>
            <th><?= $this->Paginator->sort('city') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($doctors as $doctor): ?>
        <tr>
            <td><?= $this->Number->format($doctor->id) ?></td>
            <td><?= h($doctor->firstname) ?></td>
            <td><?= h($doctor->lastname) ?></td>
            <td>
                <?= $doctor->has('specialty') ? $this->Html->link($doctor->specialty->id, ['controller' => 'Specialties', 'action' => 'view', $doctor->specialty->id]) : '' ?>
            </td>
            <td><?= h($doctor->address) ?></td>
            <td><?= h($doctor->phone) ?></td>
            <td><?= h($doctor->city) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $doctor->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctor->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?>
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
