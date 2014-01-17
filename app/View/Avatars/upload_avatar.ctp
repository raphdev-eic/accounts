    <div class="col-lg-8 wrapper-2">
        <?php echo $this->Session->flash(); ?>
          <section class="panel">
                <div class="stepy-tab">
                    <ul id="default-titles" class="stepy-titles clearfix">
                        <li id="default-title-0" class="">
                            <div>Step 1</div>
                        </li>
                        <li id="default-title-1" class="">
                            <div>Step 2</div>
                        </li>                        
                        <li id="default-title-2">
                            <div>Step 3</div>
                        </li>
                        <li id="default-title-3" class="current-step">
                            <div>Step 4</div>
                        </li>
                    </ul>
                </div>
                <div class="panel-body panel-primary">
                    <div class="panel-heading">Ajouter un photo (facultatif) | EiC Corporation</div>
                    <div class="panel-body col-md-offset-2">
                    <?php echo $this->Form->create('Avatar',array('class'=>'form-horizontal','type'=>'file','url'=>array('controller'=>'Avatar','action'=>'UploadAvatar')));?>
                       <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Ajouter une photo</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('url_file',array('class'=>'form-control','id'=>'url_file','label'=>false,'type'=>'file'));
                               ?>
                             </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                              <?php echo $this->Form->button('Uploder',array('class'=>'btn btn-success')); ?>
                              <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'info')); ?>" class="btn btn-danger pull-right">Passer au suivant</a>
                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                        </div>
                </div>
          </section>
    </div>
