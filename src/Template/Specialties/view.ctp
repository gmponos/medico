<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Specialty'), ['action' => 'edit', $specialty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Specialty'), ['action' => 'delete', $specialty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Specialties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="specialties view large-10 medium-9 columns">
    <h2><?= h($specialty->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Specialty') ?></h6>
            <p><?= h($specialty->specialty) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($specialty->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($specialty->created) ?></p>
            <h6 class="subheader"><?= __('Updated') ?></h6>
            <p><?= h($specialty->updated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Doctors') ?></h4>
    <?php if (!empty($specialty->doctors)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Firstname') ?></th>
            <th><?= __('Lastname') ?></th>
            <th><?= __('Specialty Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('City') ?></th>
            <th><?= __('Cellphone') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Updated') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($specialty->doctors as $doctors): ?>
        <tr>
            <td><?= h($doctors->id) ?></td>
            <td><?= h($doctors->firstname) ?></td>
            <td><?= h($doctors->lastname) ?></td>
            <td><?= h($doctors->specialty_id) ?></td>
            <td><?= h($doctors->address) ?></td>
            <td><?= h($doctors->phone) ?></td>
            <td><?= h($doctors->city) ?></td>
            <td><?= h($doctors->cellphone) ?></td>
            <td><?= h($doctors->created) ?></td>
            <td><?= h($doctors->updated) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Doctors', 'action' => 'view', $doctors->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Doctors', 'action' => 'edit', $doctors->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Doctors', 'action' => 'delete', $doctors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctors->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
