<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Medications Visit'), ['action' => 'edit', $medicationsVisit->medications_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medications Visit'), ['action' => 'delete', $medicationsVisit->medications_id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicationsVisit->medications_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medications Visits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medications Visit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="medicationsVisits view large-10 medium-9 columns">
    <h2><?= h($medicationsVisit->medications_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Medication') ?></h6>
            <p><?= $medicationsVisit->has('medication') ? $this->Html->link($medicationsVisit->medication->id, ['controller' => 'Medications', 'action' => 'view', $medicationsVisit->medication->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Visit') ?></h6>
            <p><?= $medicationsVisit->has('visit') ? $this->Html->link($medicationsVisit->visit->id, ['controller' => 'Visits', 'action' => 'view', $medicationsVisit->visit->id]) : '' ?></p>
        </div>
    </div>
</div>
