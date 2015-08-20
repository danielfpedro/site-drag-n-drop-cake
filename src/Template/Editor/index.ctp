<?= $this->assign('title', 'Editor')  ?>
<?= $this->Html->css('editor', ['inline' => false])  ?>
<?= $this->Html->script('App/Editor/index', ['inline' => false])  ?>

<input type="hidden" id="url" value="<?= $this->Url->build([$project->id]) ?>">

<div class="editor-wrapper">
	<div class="col-left">
	    <div style="height: 100%;overflow: auto;">
	    	Blocks
	    </div>
	</div>
	<div class="col-center">
	    oi
	</div>
	<div class="col-right">
	    oi
	</div>
</div>

<?= $this->element('App/PagesProjects/modal_add') ?>
<?= $this->element('App/PagesProjects/modal_rename') ?>