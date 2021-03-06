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
                        <li id="default-title-2" class="current-step">
                            <div>Step 3</div>
                        </li>
                    </ul>
                </div>
                <div class="panel-body panel-primary">
                    <div class="panel-heading">Complétez vos informations | EiC Corporation</div>
                    <div class="panel-body col-md-offset-2">
                    <?php echo $this->Form->create('Profile',array('class'=>'form-horizontal'));?>
                       <?php echo $this->Form->input('user_id',array('type'=>'hidden')); ?>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Nom de votre héritier(e)</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('heritier',array('class'=>'form-control','id'=>'userheritier','label'=>false,'placeholder'=>'Nom de votre héritié(e)')); ?>
                             </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-3 control-label">Votre numéro de téléphone</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('phone',array('class'=>'form-control','id'=>'userphone','label'=>false,'placeholder'=>'Numéro de téléphone')); ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Votre numéro de mobile</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('mobile',array('class'=>'form-control','id'=>'usermobile','label'=>false,'placeholder'=>'Numéro de mobile'
                              )); 
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Votre profession</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('fonction',array('class'=>'form-control','id'=>'userfonction','label'=>false,'placeholder'=>'Votre profession'));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Site internet</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('website',array('class'=>'form-control','id'=>'userwebsite','label'=>false,'placeholder'=>'http://www.votresiteinternet.com'));
                              ?>
                            </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-lg-3 control-label">Nom de votre entreprise</label>
                            <div class="col-lg-6">
                              <?php echo $this->Form->input('entreprise',array('class'=>'form-control','id'=>'userentreprise','label'=>false,'placeholder'=>'Employeur'));
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
