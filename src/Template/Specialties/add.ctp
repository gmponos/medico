<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Back'), ['action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
    <div class="specialties form col-lg-10 col-md-9">
        <?= $this->Form->create($specialty) ?>
        <fieldset>
            <legend><?= __('Add Specialty') ?></legend>
            <?php
            echo $this->Form->input('specialty');
            ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>