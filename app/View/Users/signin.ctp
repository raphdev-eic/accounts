    <div class="col-lg-8 wrapper-2">
        <?php echo $this->Session->flash(); ?>
          <section class="panel">
                <div class="stepy-tab">
                    <ul id="default-titles" class="stepy-titles clearfix">
                        <li id="default-title-0" class="">
                            <div>Step 1</div>
                        </li>
                        <li id="default-title-1" class="current-step">
                            <div>Step 2</div>
                        </li>
                        <li id="default-title-2" class="">
                            <div>Step 3</div>
                        </li>
                    </ul>
                </div>
                <div class="panel-body panel-primary">
                    <div class="panel-heading">Créez vos accès | EiC Corporation</div>
                    <div class="panel-body col-md-offset-2">
                    <?php echo $this->Form->create('User',array('class'=>'form-horizontal'));?>
                       <?php echo $this->Form->input('status',array('type'=>'hidden')); ?>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Nom d'utilisateur</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('username',array('class'=>'form-control','id'=>'userUsername','label'=>false)); ?> <small>Entrez un caractère alphanumériques sans espace</small>
                             </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Mot de passe</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('password',array('class'=>'form-control','id'=>'userPassword','label'=>false)); ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Saisissez à nouveau votre mot de passe</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('pass',array('class'=>'form-control','id'=>'userPass','type'=>'password','label'=>false
                              ));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Votre domaine d'activité</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('domaine_id',array('class'=>'form-control','id'=>'domaine_id','label'=>false,'options'=>$listDomaine));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Genre</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('sexe',array('class'=>'form-control','id'=>'sexe','label'=>false,'options'=>array('1'=>'Masculin','2'=>'Feminin')));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Genre</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('city_id',array('class'=>'form-control','id'=>'city_id','label'=>false,'options'=>$listCity));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Genre</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('city_id',array('class'=>'form-control','id'=>'city_id','label'=>false,'options'=>$country));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                              <?php echo $this->Form->button('Etape suivante',array('class'=>'btn btn-success pull-right')); ?>
                            </div>
                        </div>
                        <?php echo $this->Form->end(); ?>
                        </div>
                </div>
          </section>
    </div>
