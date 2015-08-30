<div class="row">
    <div class="col-lg-2 col-md-3">
        <h3><?= __('Actions') ?></h3>
        <ul class="side-nav">
            <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?></li>
                    </ul>
    </div>
    <div class="col-lg-10 col-md-9">
        <table class="table table-hover table-striped table-bordered small">
            <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('appointment') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('updated') ?></th>
                                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($appointments as $appointment): ?>
            <tr>
                                <td><?= $this->Number->format($appointment->id) ?></td>
                                <td><?= h($appointment->appointment) ?></td>
                                <td><?= h($appointment->created) ?></td>
                                <td><?= h($appointment->updated) ?></td>
                                <td>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id], ['icon' => 'search']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id], ['icon' => 'pencil']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>