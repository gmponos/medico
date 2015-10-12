<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                            <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['action' => 'index']) ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Treatments'), ['controller' => 'Treatments', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Treatment'), ['controller' => 'Treatments', 'action' => 'add']) ?></li>
                        </ul>
        </div>
    </div>
    <div class="medications form col-lg-10 col-md-9">
    <?= $this->Form->create($medication) ?>
    <fieldset>
        <legend><?= __('Add Medication') ?></legend>
        <?php
            echo $this->Form->input('medication');
            echo $this->Form->input('description');
        ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>