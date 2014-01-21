<?php echo $this->assign('title','Comptes EiC'); ?>
<?php echo $this->start('button-content'); ?>
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Services EiC corporation" data-placement="right" class="tooltips"> <?php echo $this->Html->image('icon.png');?></div>
          </div>
          <!--logo start-->
          <a href="http://www.eic-corporation.com" class="logo" >EiC <span>Corporation</span></a>
          <!--logo end-->
          <div class="top-nav">
              <ul class="nav pull-right top-menu">
                <span>Vous n'avez pas encore activé votre compte ? cliquez ici  </span><a href="<?php echo $this->Html->url(array('action'=>'statuteBook')); ?>" class="btn btn-danger">Code investisseur</a>
              </ul>
          </div>
      </header>
      <!--header end-->
<?php echo $this->end(); ?>

         <?php echo $this->Session->flash();?>

         <h2 class="alingcenter">Centre d'authentification investisseur EiC</h2>

        <?php echo $this->Html->image('icon_auth.png',array('class'=>'icon-auth')); ?>

      	<?php echo $this->Form->create('User',array('class'=>'form-signin')); ?>

            <h2 class="form-signin-heading">Connectez à votre compte EiC</h2>

            <div class="login-wrap">
                <?php echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Adresse email','label'=>false,'autofocus')); ?>

                <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Mot de passe','label'=>false));?>

                <label class="checkbox">
                    <span class="pull-right"> <a href="#"> Mot de passe oublier?</a></span>
                </label>
                <?php echo $this->Form->button('Connexion',array('class'=>'btn btn-lg btn-login btn-block')); ?>
            </div>

       <?php echo $this->Form->end(); ?>