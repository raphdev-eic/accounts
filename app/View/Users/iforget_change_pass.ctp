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
              <div class="panel-body">
                <?php echo $this->Form->create('User',array('class'=>'form-horizontal')); ?>
                  <div class="form-group">
                    <div class="col-lg-8">
                      <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Entrez votre mot de passe','label'=>'Créer un nouveau mot de passe')); ?>
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-8">
                      <?php echo $this->Form->input('pass',array('class'=>'form-control','placeholder'=>'Entrez a nouveau votre mot de passe','type'=>'password','label'=>'Vérifiez votre mot de passe')); ?>
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <?php echo $this->Form->button('Annuler',array('class'=>'btn btn-danger')); ?>
                      <?php echo $this->Form->button('Modifier',array('class'=>'btn btn-info')); ?>
                    </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                  </div>
         </div>
       </div>
       <div class="cl"></div>
   </div>
 </section>