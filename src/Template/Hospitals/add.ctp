<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Hospitals'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="hospitals form large-10 medium-9 columns">
    <?= $this->Form->create($hospital) ?>
    <fieldset>
        <legend><?= __('Add Hospital') ?></legend>
        <?php
            echo $this->Form->input('hospital');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
