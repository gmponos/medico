<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Specialties'),
                        ['controller' => 'Specialties', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Specialty'),
                        ['controller' => 'Specialties', 'action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Visits'),
                        ['controller' => 'Visits', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Visit'),
                        ['controller' => 'Visits', 'action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="doctors form col-lg-10 col-md-9">
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
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>