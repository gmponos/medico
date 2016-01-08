<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $appointment->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]
                    )
                    ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Appointments'),
                        ['action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'),
                        ['controller' => 'Doctors', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'),
                        ['controller' => 'Doctors', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="appointments form col-lg-10 col-md-9">
        <?= $this->Form->create($appointment) ?>
        <fieldset>
            <legend><?= __('Edit Appointment') ?></legend>
            <?php
            echo $this->Form->input('reason');
            echo $this->Form->chosen('doctor_id', ['options' => $doctors]);
            echo $this->Form->datepicker('appointment');
            ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>