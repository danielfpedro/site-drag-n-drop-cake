<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                    <?= __('Nova Página') ?>
                </h4>
            </div>
            <div class="modal-body">
                <?php 
                    echo $this->Form->create($newPage, [
                        'id' => 'form-ajax-add-page',
                        'url' => [
                            'controller' => 'PagesProjects',
                            'action' =>'add'
                        ]
                    ]);
                    echo $this->Form->input('project_id', ['type' => 'hidden', 'value' => $project->id]);
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
                            <?= __('Criar') ?>
                        </button>
                    </div>  
                </div>
                <?= $this->element('App/modal_loader') ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>