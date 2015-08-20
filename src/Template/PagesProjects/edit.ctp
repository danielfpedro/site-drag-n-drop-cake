<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagesProject->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagesProject->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pages Projects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pagesProjects form large-10 medium-9 columns">
    <?= $this->Form->create($pagesProject) ?>
    <fieldset>
        <legend><?= __('Edit Pages Project') ?></legend>
        <?php
            echo $this->Form->input('project_id', ['options' => $projects]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
