<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $visit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diagnoses'), ['controller' => 'Diagnoses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diagnosis'), ['controller' => 'Diagnoses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="visits form large-10 medium-9 columns">
    <?= $this->Form->create($visit) ?>
    <fieldset>
        <legend><?= __('Edit Visit') ?></legend>
        <?php
            echo $this->Form->input('visited');
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('diagnose_id', ['options' => $diagnoses]);
            echo $this->Form->input('medications._ids', ['options' => $medications]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
