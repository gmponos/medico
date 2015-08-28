<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Specialties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="specialties form large-10 medium-9 columns">
    <?= $this->Form->create($specialty) ?>
    <fieldset>
        <legend><?= __('Add Specialty') ?></legend>
        <?php
            echo $this->Form->input('specialty');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
