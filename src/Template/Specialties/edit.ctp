<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">

                <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $specialty->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]
                    )
                    ?></li>
            </ul>
        </div>
    </div>
    <div class="specialties form col-lg-10 col-md-9">
        <?= $this->Form->create($specialty) ?>
        <fieldset>
            <legend><?= __('Edit Specialty') ?></legend>
            <?= $this->Form->input('specialty'); ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>