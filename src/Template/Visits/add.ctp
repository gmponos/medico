<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Back'), ['action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
    <div class="visits form col-lg-10 col-md-9">
        <?= $this->Form->create($visit) ?>
        <fieldset>
            <legend><?= __('Add Visit') ?></legend>
            <?php
            echo $this->Form->datepicker('visited');
            echo $this->Form->chosen('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('reason', ['rows' => 5]);
            echo $this->Form->input('diagnose', ['rows' => 5]);
            ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>