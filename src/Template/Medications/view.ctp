<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Medication'), ['action' => 'edit', $medication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medication'), ['action' => 'delete', $medication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medication'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="medications view large-10 medium-9 columns">
    <h2><?= h($medication->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Medication') ?></h6>
            <p><?= h($medication->medication) ?></p>
            <h6 class="subheader"><?= __('Medicationscol') ?></h6>
            <p><?= h($medication->medicationscol) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($medication->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($medication->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($medication->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Visits') ?></h4>
    <?php if (!empty($medication->visits)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Reason') ?></th>
            <th><?= __('Visited') ?></th>
            <th><?= __('Doctor Id') ?></th>
            <th><?= __('Diagnose Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($medication->visits as $visits): ?>
        <tr>
            <td><?= h($visits->id) ?></td>
            <td><?= h($visits->reason) ?></td>
            <td><?= h($visits->visited) ?></td>
            <td><?= h($visits->doctor_id) ?></td>
            <td><?= h($visits->diagnose_id) ?></td>
            <td><?= h($visits->created) ?></td>
            <td><?= h($visits->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Visits', 'action' => 'view', $visits->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Visits', 'action' => 'edit', $visits->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visits', 'action' => 'delete', $visits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visits->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
