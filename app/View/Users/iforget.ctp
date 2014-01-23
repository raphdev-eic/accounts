<?php echo $this->assign('title','Eic Coporation | Assistance'); ?>
<header class="header white-bg">
  <div class="sidebar-toggle-box">
    <div data-original-title="Assistance eic corporation" data-placement="right" class="tooltips"> <?php echo $this->Html->image('icon.png');?>
    </div>
  </div>
   <!--logo start-->
          <a href="" class="logo">EiC <span>Corporation</span></a>
   <!--logo end-->
 </header>
 <section class="wrapper">
   <div class="row">
       <div class="col-lg-12">
         <h3 class="alingleft">Des soucis de connexion à votre compte Eic ?</h3>
         <hr/>
       </div>
       <div class="bordures col-lg-12">
        <div class="col-lg-10"><?php echo $this->Session->flash();?></div>
         <div class="col-lg-4">
           <h4>Réinitialiser votre mot de passe ou votre identifiant de EiC</h4>
           <p>Si vous avez oublié votre mot de passe ou votre identifiant (adresse email), 
            cliquez sur le lien qui correspond à votre demande sur votre droite. En cas de problème non résolu, veuillez contacter directement la corporation</p>
         </div>
         <div class="col-lg-6">
         <!--collapse start-->
                      <div class="panel-group m-bot20" id="accordion">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle link-accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                          Vous avez oubliez votre mot de passe ?
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                      <?php echo $this->Form->create('token',array('url'=>array('controller'=>'Tokens','action'=>'iforgetPassUser'),'class'=>'form-horizontal')); ?>
                                          <div class="form-group">
                                              <div class="col-lg-8">
                                                <?php echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Entrez votre adresse mail','label'=>'Saisissez votre identifiant EiC')); ?>
                                              </div>
                                          </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <?php echo $this->Form->button('Annuler',array('class'=>'btn btn-danger')); ?>
                                        <?php echo $this->Form->button('Suivant',array('class'=>'btn btn-info')); ?>
                                      </div>
                                  </div>
                                      <?php echo $this->Form->end(); ?>
                                  </div>
                              </div>
                          </div>
                          <!--<div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle link-accordion" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          Vous avez oubliez votre identifiant (email) ?
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <?php echo $this->Form->create('token',array('url'=>array('controller'=>'Tokens','action'=>'iforgetIdUser'),'class'=>'form-horizontal')); ?>
                                          <div class="form-group">
                                              <div class="col-lg-8">
                                                <?php echo $this->Form->input('key_auth',array('class'=>'form-control','placeholder'=>'Entrez votre numéro de téléphone','label'=>false)); ?>
                                                <?php echo $this->Form->input('firstname',array('class'=>'form-control','placeholder'=>'Nom','label'=>false)); ?>
                                                <?php echo $this->Form->input('lastname',array('class'=>'form-control','placeholder'=>'Prénom','label'=>false)); ?>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <div class="col-lg-offset-2 col-lg-10">
                                                <?php echo $this->Form->button('Annuler',array('class'=>'btn btn-danger')); ?>
                                                <?php echo $this->Form->button('Envoyer',array('class'=>'btn btn-info')); ?>
                                              </div>
                                          </div>
                                      <?php echo $this->Form->end(); ?>
                                  </div>
                              </div>
                          </div>
                      </div>-->
                      <!--collapse end-->
         </div>
       </div>
       <div class="cl"></div>
   </div>
 </section>