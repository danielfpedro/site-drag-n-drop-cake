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
                            <?= $this->Html->link('Nova página', [
                                'controller' => 'Editor',
                                'action' => 'index']
                            ) ?>
                            <?= $this->Html->link('Renomear página', [
                                'controller' => 'Editor',
                                'action' => 'index']
                            ) ?>
                            <?= $this->Html->link('Deletar página', [
                                'controller' => 'Editor',
                                'action' => 'index']
                            ) ?>
                        </li>
                        <li class="divider"></li>
                        <?php foreach ($project->pages as $page): ?>
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