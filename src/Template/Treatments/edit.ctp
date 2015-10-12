<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                            <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $treatment->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $treatment->id)]
                    )
                ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Treatments'), ['action' => 'index']) ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?></li>
                            <li class="list-group-item"><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?></li>
                        </ul>
        </div>
    </div>
    <div class="treatments form col-lg-10 col-md-9">
    <?= $this->Form->create($treatment) ?>
    <fieldset>
        <legend><?= __('Edit Treatment') ?></legend>
        <?php
            echo $this->Form->chosen('medication_id', ['options' => $medications]);
            echo $this->Form->chosen('visit_id', ['options' => $visits]);
        ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>