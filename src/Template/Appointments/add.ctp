<div class="row">
    <div class="col-lg-2 col-md-3">
    <?= $this->Html->pageHeader(__('Actions'), 'h5'); ?>
    <ul class="list-group">
        <li class="list-group-item"><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="appointments form col-lg-10 col-md-9">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->input('appointment');
        ?>
    </fieldset>
    <?= $this->Form->btnSubmit() ?>
    <?= $this->Form->end() ?>
</ul>
</div>