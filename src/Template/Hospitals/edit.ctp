<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hospital->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hospitals'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="hospitals form large-10 medium-9 columns">
    <?= $this->Form->create($hospital) ?>
    <fieldset>
        <legend><?= __('Edit Hospital') ?></legend>
        <?php
            echo $this->Form->input('hospital');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
