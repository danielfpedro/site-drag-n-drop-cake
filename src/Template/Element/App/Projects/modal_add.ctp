<div class="modal fade" id="my-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                    <?= __('Novo Site') ?>
                </h4>
            </div>
            <div class="modal-body">
                <?php 
                    echo $this->Form->create($newProject, ['url' => ['action' =>'add']]);
                    echo $this->Form->input('name');
                ?>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?= __('Fechar') ?>
                        </button>
                        <button type="submit" class="btn btn-primary btn-add">
                            <?= __('Criar') ?>
                        </button>
                    </div>  
                </div>
                <div class="row" style="margin-top: 15px; display: none;" id="loader">
                    <div class="col-md-12">
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">45% Complete</span>
                        </div>
                        </div>
                    </div>  
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>