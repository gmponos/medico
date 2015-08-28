<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Medications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="medications form large-10 medium-9 columns">
    <?= $this->Form->create($medication) ?>
    <fieldset>
        <legend><?= __('Add Medication') ?></legend>
        <?php
            echo $this->Form->input('medication');
            echo $this->Form->input('medicationscol');
            echo $this->Form->input('visits._ids', ['options' => $visits]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
