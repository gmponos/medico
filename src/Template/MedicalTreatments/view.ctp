<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Medical Treatment'), ['action' => 'edit', $medicalTreatment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medical Treatment'), ['action' => 'delete', $medicalTreatment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicalTreatment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medical Treatments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medical Treatment'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="medicalTreatments view large-10 medium-9 columns">
    <h2><?= h($medicalTreatment->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($medicalTreatment->id) ?></p>
        </div>
    </div>
</div>
