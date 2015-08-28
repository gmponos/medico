<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Hospital'), ['action' => 'edit', $hospital->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hospital'), ['action' => 'delete', $hospital->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hospitals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospital'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="hospitals view large-10 medium-9 columns">
    <h2><?= h($hospital->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Hospital') ?></h6>
            <p><?= h($hospital->hospital) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($hospital->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($hospital->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($hospital->updated) ?></p>
        </div>
    </div>
</div>
