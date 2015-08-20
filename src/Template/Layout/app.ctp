<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

	<?= $this->Html->css('../lib/bootstrap/dist/css/bootstrap.min') ?>
    <?= $this->Html->css('app') ?>
    <?= $this->Html->css('../lib/fontawesome/css/font-awesome.min') ?>

	<?= $this->Html->script('../lib/jquery/dist/jquery.min') ?>
	<?= $this->Html->script('../lib/bootstrap/dist/js/bootstrap.min') ?>
	<?= $this->Html->script('App/common') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

	<?php if ($this->request->param('controller') != 'Editor'): ?>
		<?= $this->element('App/navbar') ?>
	<?php else: ?>
		<?= $this->element('App/navbar_editor') ?>
	<?php endif ?>
	

	<?= $this->Flash->render() ?>
	<?= $this->fetch('content') ?>

</body>
</html>
