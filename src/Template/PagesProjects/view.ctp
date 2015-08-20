<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pages Project'), ['action' => 'edit', $pagesProject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pages Project'), ['action' => 'delete', $pagesProject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pagesProject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pages Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pages Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pagesProjects view large-10 medium-9 columns">
    <h2><?= h($pagesProject->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Project') ?></h6>
            <p><?= $pagesProject->has('project') ? $this->Html->link($pagesProject->project->name, ['controller' => 'Projects', 'action' => 'view', $pagesProject->project->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($pagesProject->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pagesProject->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($pagesProject->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($pagesProject->modified) ?></p>
        </div>
    </div>
</div>
