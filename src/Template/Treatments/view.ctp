<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
                <ul class="list-group">
                    <li class="list-group-item"><?= $this->Html->link(__('Edit Treatment'), ['action' => 'edit', $treatment->id]) ?> </li>
                    <li class="list-group-item"><?= $this->Form->postLink(__('Delete Treatment'), ['action' => 'delete', $treatment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $treatment->id)]) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('List Treatments'), ['action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Treatment'), ['action' => 'add']) ?> </li>
                                        <li class="list-group-item"><?= $this->Html->link(__('List Medications'), ['controller' => 'Medications', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Medication'), ['controller' => 'Medications', 'action' => 'add']) ?> </li>
                                        <li class="list-group-item"><?= $this->Html->link(__('List Visits'), ['controller' => 'Visits', 'action' => 'index']) ?> </li>
                    <li class="list-group-item"><?= $this->Html->link(__('New Visit'), ['controller' => 'Visits', 'action' => 'add']) ?> </li>
                                    </ul>
            </div>
        </div>
    <div class="treatments col-lg-10 col-md-9">
        <h4><?= h($treatment->id) ?></h4>
        <div class="row">
                <div class="col-lg-6">
                        <h6 class="small"><?= __('Medication') ?></h6>
                <p><?= $treatment->has('medication') ? $this->Html->link($treatment->medication->id, ['controller' => 'Medications', 'action' => 'view', $treatment->medication->id]) : '' ?></p>
                            <h6 class="small"><?= __('Visit') ?></h6>
                <p><?= $treatment->has('visit') ? $this->Html->link($treatment->visit->id, ['controller' => 'Visits', 'action' => 'view', $treatment->visit->id]) : '' ?></p>
                    </div>
                    <div class="col-lg-2">
                    <h6 class="small"><?= __('Id') ?></h6>
                <p><?= $this->Number->format($treatment->id) ?></p>
                </div>
                    <div class="col-lg-2">
                    <h6 class="small"><?= __('Created') ?></h6>
                <p><?= h($treatment->created) ?></p>
                    <h6 class="small"><?= __('Modified') ?></h6>
                <p><?= h($treatment->modified) ?></p>
                </div>
                </div>
        </div>
</div>

