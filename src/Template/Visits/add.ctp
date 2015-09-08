<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                            <li class="list-group-item"><?= $this->Html->link(__('List Visits'), ['action' => 'index']) ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Diagnoses'), ['controller' => 'Diagnoses', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Diagnosis'), ['controller' => 'Diagnoses', 'action' => 'add']) ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
                        </ul>
        </div>
    </div>
    <div class="visits form col-lg-10 col-md-9">
    <?= $this->Form->create($visit) ?>
    <fieldset>
        <legend><?= __('Add Visit') ?></legend>
        <?php
            echo $this->Form->input('visited');
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('diagnose_id', ['options' => $diagnoses]);
            echo $this->Form->input('medications._ids', ['options' => $medications]);
        ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>