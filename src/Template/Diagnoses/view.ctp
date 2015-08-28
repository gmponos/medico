<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Diagnosis'), ['action' => 'edit', $diagnosis->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diagnosis'), ['action' => 'delete', $diagnosis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diagnosis->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diagnoses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diagnosis'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="diagnoses view large-10 medium-9 columns">
    <h2><?= h($diagnosis->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($diagnosis->id) ?></p>
        </div>
    </div>
</div>
