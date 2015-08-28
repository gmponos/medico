<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diagnosis->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diagnosis->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Diagnoses'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="diagnoses form large-10 medium-9 columns">
    <?= $this->Form->create($diagnosis) ?>
    <fieldset>
        <legend><?= __('Edit Diagnosis') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
