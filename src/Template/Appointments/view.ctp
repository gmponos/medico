<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="appointments view large-10 medium-9 columns">
    <h2><?= h($appointment->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($appointment->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Appointment') ?></h6>
            <p><?= h($appointment->appointment) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($appointment->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($appointment->updated) ?></p>
        </div>
    </div>
</div>
