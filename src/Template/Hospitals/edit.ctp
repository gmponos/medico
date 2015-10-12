<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $hospital->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->id)]
                    )
                    ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Back'), ['action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
    <div class="hospitals form col-lg-10 col-md-9">
        <?= $this->Form->create($hospital) ?>
        <fieldset>
            <legend><?= __('Edit Hospital') ?></legend>
            <?= $this->Form->input('hospital'); ?>
        </fieldset>
        <?= $this->Form->btnSubmit() ?>
        <?= $this->Form->end() ?>
    </div>
</div>