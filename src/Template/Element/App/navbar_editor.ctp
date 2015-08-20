<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
            <a class="navbar-brand" href="#"><?= $project->name ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $currentPage->name ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#modal-add" data-toggle="modal">Nova página</a>
                        </li>
                        <li>
                            <a href="#modal-rename" data-toggle="modal">Renomear página</a>
                        </li>
                        <li>
                            <?= $this->Form->postLink('Deletar página', [
                                    'controller' => 'PagesProjects',
                                    'action' => 'delete',
                                    $currentPage->id,
                                    $project->id, // Informa o ID do projecto para redirecionar certo
                                ],[
                                    'confirm' => 'Você realmente deseja deletar esta página? Esta ação não poderá ser desfeita.'
                                ]
                            ) ?>
                        </li>
                        <li class="divider"></li>
                        <?php foreach ($project->pages_projects as $page): ?>
                            <li class="<?= ($page == $currentPage) ? 'active' : '' ?>">
                                <?= $this->Html->link($page->name, [
                                    'action' => 'index',
                                    $project->id,
                                    $page->id
                                ], [
                                    'escape' => false
                                ]) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-devices">
                    <a
                        href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                        role="button">
                        <span class="fa fa-desktop main"></span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" data-icon="desktop">
                                Desktop<span class="fa fa-desktop pull-right"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-icon="laptop">
                                Laptop<span class="fa fa-laptop pull-right"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-icon="tablet">
                                Tablet <span class="fa fa-tablet pull-right"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-icon="mobile">
                                Smartphone<span class="fa fa-mobile pull-right"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dainel Pedro <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <?= $this->Html->link('Meus Site', ['controller' => 'Projects']) ?>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <?= $this->Html->link('Sair', ['controller' => 'Projects']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>