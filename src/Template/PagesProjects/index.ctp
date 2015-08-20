<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pages Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pagesProjects index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('project_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pagesProjects as $pagesProject): ?>
        <tr>
            <td><?= $this->Number->format($pagesProject->id) ?></td>
            <td><?= h($pagesProject->created) ?></td>
            <td><?= h($pagesProject->modified) ?></td>
            <td>
                <?= $pagesProject->has('project') ? $this->Html->link($pagesProject->project->name, ['controller' => 'Projects', 'action' => 'view', $pagesProject->project->id]) : '' ?>
            </td>
            <td><?= h($pagesProject->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pagesProject->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagesProject->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pagesProject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesProject->id)]) ?>
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
