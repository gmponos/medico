<div class="row">
    <div class="col-lg-2 col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><?= __('Actions') ?></div>
            <ul class="list-group">
                <li class="list-group-item"><?= $this->Html->link(__('Back'), ['action' => 'index']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?> </li>
                <li class="list-group-item"><?= $this->Html->link(__('Edit Specialty'),
                        ['action' => 'edit', $specialty->id]) ?> </li>
                <li class="list-group-item"><?= $this->Form->postLink(__('Delete Specialty'),
                        ['action' => 'delete', $specialty->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]) ?> </li>
            </ul>
        </div>
    </div>
    <div class="specialties col-lg-10 col-md-9">
        <h4><?= h($specialty->specialty) ?></h4>

        <div class="row">
            <div class="col-lg-6">
                <h6 class="small"><?= __('Specialty') ?></h6>

                <p><?= h($specialty->specialty) ?></p>
            </div>
            <div class="col-lg-2">
                <h6 class="small"><?= __('Created') ?></h6>

                <p><?= h($specialty->created) ?></p>
                <h6 class="small"><?= __('Modified') ?></h6>

                <p><?= h($specialty->modified) ?></p>
            </div>
        </div>
    </div>
</div>

<div class="related row">
    <div class="col-lg-12">
        <h4><?= __('Related Doctors') ?></h4>
        <?php if (!empty($specialty->doctors)): ?>
            <table class="table table-hover table-striped table-bordered small">
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <th><?= __('Lastname') ?></th>
                    <th><?= __('Hospital') ?></th>
                    <th><?= __('Address') ?></th>
                    <th><?= __('Phone') ?></th>
                    <th><?= __('City') ?></th>
                    <th><?= __('Cellphone') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($specialty->doctors as $doctors): ?>
                    <tr>
                        <td><?= h($doctors->firstname) ?></td>
                        <td><?= h($doctors->lastname) ?></td>
                        <td><?= $doctors->has('hospital') ? h($doctors->hospital->hospital) : ""; ?></td>
                        <td><?= h($doctors->address) ?></td>
                        <td><?= h($doctors->phone) ?></td>
                        <td><?= h($doctors->city) ?></td>
                        <td><?= h($doctors->cellphone) ?></td>
                        <td>
                            <?= $this->Html->link('', ['controller' => 'Doctors', 'action' => 'view', $doctors->id],
                                ['icon' => ['class' => 'fa fa-search fa-fw fa-2x']]); ?>
                            <?= $this->Html->link('', ['controller' => 'Doctors', 'action' => 'edit', $doctors->id],
                                ['icon' => ['class' => 'fa fa-pencil fa-fw fa-2x']]); ?>
                            <?= $this->Form->postLink('',
                                ['controller' => 'Doctors', 'action' => 'delete', $doctors->id], [
                                    'icon' => ['class' => 'fa fa-times fa-fw fa-2x text-danger'],
                                    'confirm' => __('Are you sure you want to delete # {0}?', $doctors->id),
                                ]);
                            ?>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
