<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Back'), ['action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $doctor->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]
                    )
                    ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('List Specialties'),
                        ['controller' => 'Specialties', 'action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
    <div class="doctors form col-lg-10 col-md-9">
        <?= $this->Form->create($doctor) ?>
        <fieldset>
            <legend><?= __('Edit Doctor') ?></legend>
            <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->chosen('specialty_id', ['options' => $specialties]);
            echo $this->Form->chosen('hospital_id', ['options' => $hospitals, 'empty' => true]);
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