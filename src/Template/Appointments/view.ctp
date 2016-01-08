<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Edit Appointment'), [
                        'action' => 'edit',
                        $appointment->id,
                    ]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Delete Appointment'), [
                        'action' => 'delete',
                        $appointment->id,
                    ], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('List Doctors'), [
                        'controller' => 'Doctors',
                        'action' => 'index',
                    ]) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Doctor'), [
                        'controller' => 'Doctors',
                        'action' => 'add',
                    ]) ?> </li>
            </ul>
        </div>
    </div>
    <div class="appointments col-lg-10 col-md-9">
        <h4><?= h($appointment->id) ?></h4>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="small"><?= __('Doctor') ?></h6>
                        <p><?= $appointment->has('doctor') ? $this->Html->link($appointment->doctor->fullname, [
                                'controller' => 'Doctors',
                                'action' => 'view',
                                $appointment->doctor->id,
                            ]) : '' ?></p>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="small"><?= __('Id') ?></h6>
                        <p><?= $this->Number->format($appointment->id) ?></p>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="small"><?= __('Appointment') ?></h6>
                        <p><?= h($appointment->appointment) ?></p>
                        <h6 class="small"><?= __('Created') ?></h6>
                        <p><?= h($appointment->created) ?></p>
                        <h6 class="small"><?= __('Modified') ?></h6>
                        <p><?= h($appointment->modified) ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <h6 class="small"><?= __('Reason') ?></h6>
                        <?= $this->Text->autoParagraph(h($appointment->reason)) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

