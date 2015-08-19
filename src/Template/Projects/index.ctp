<?= $this->assign('title', 'Projetos') ?>
<?= $this->Html->script('App/Projects/index.js') ?>

<div class="container-fluid" style="margin-top: 80px;">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>
                Jet Market
            </h1>
            <p>
                Acesse um de seus sites criados ou crie um novo.
            </p>
            <button class="btn btn-primary btn-danger btn-lg" data-toggle="modal" data-target="#my-modal">
                Criar Novo Site
            </button>
        </div>
    </div>

    <br>
    <br>

    <div class="row">
        <?php foreach ($projects as $project): ?>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                            $totalPaginas = count($project->pages);
                            $label = ($totalPaginas > 1) ? 'Páginas' : 'Página';
                        ?>
                        <?= $project->name ?> - <?= $totalPaginas . ' ' . $label ?>
                    </div>
                    <div class="panel-body text-center">
                        <?= $this->Html->link('Editar', [
                            'controller' => 'Editor',
                            $project->id
                        ], [
                            'class' => 'btn btn-default btn-sm'
                        ]) ?>
                    </div>
                    <div class="panel-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-cog"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <?= $this->Html->link('Configurações do site', []) ?>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <?= $this->Form->postLink('Deletar', [
                                            'action' => 'delete',
                                            $project['id']
                                        ], [
                                            'confirm' => 'Você realmente deseja deletar este site?'
                                        ]) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->element('App/Projects/modal_add') ?>
