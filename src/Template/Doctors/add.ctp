<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Specialties'), ['controller' => 'Specialties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialty'), ['controller' => 'Specialties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="doctors form large-10 medium-9 columns">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Add Doctor') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('specialty_id', ['options' => $specialties]);
            echo $this->Form->input('address');
            echo $this->Form->input('phone');
            echo $this->Form->input('city');
            echo $this->Form->input('cellphone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
