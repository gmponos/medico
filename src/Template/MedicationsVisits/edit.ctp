<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medicationsVisit->medications_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medicationsVisit->medications_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medications Visits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medicationsVisits form large-10 medium-9 columns">
    <?= $this->Form->create($medicationsVisit) ?>
    <fieldset>
        <legend><?= __('Edit Medications Visit') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
