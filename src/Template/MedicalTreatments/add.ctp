<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Medical Treatments'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="medicalTreatments form large-10 medium-9 columns">
    <?= $this->Form->create($medicalTreatment) ?>
    <fieldset>
        <legend><?= __('Add Medical Treatment') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
