<div class="modal fade" id="modal-rename" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <?= __('Renomear Página') ?>
                </h4>
            </div>
            <div class="modal-body">
                <?php 
                    echo $this->Form->create($currentPage, [
                        'id' => 'form-ajax',
                        'url' => [
                            'controller' => 'PagesProjects',
                            'action' =>'edit'
                        ]
                    ]);
                    echo $this->Form->input('name');
                ?>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?= __('Fechar') ?>
                        </button>
                        <button type="submit" class="btn btn-primary btn-add btn-submit">
                            <?= __('Renomear') ?>
                        </button>
                    </div>  
                </div>
                <?= $this->element('App/modal_loader') ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>