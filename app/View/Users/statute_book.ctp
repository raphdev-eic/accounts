<?php echo $this->assign('title','Eic - Code investisseur'); ?>
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
                <span>Vous etes déja inscrit ? Cliquez ici  </span><a href="<?php echo $this->Html->url(array('action'=>'login',urlencode('?service=Auth'))); ?>" class="btn btn-info">connexion</a>
              </ul>
          </div>
      </header>
      <!--header end-->
<?php echo $this->end(); ?>
         <?php echo $this->Session->flash();?>
         <h2 class="alingcenter">Centre d'authentification investisseur EiC</h2>
         <?php echo $this->Html->image('icon_key1.png',array('class'=>'icon-auth'));?>
      	 <?php echo $this->Form->create('User',array('class'=>'form-signin','inputDefaults'=>array('div'=>false,'label'=>false))); ?>
        <h2 class="form-signin-heading">Code investisseur</h2>
        <div class="login-wrap">
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('key',array('class'=>'form-control','placeholder'=>'Entrez votre code','label'=>false)); ?>
            <label class="checkbox">
                <span class="pull-right"> <a href="#">Code d'activation oublier?</a></span>
            </label>
            <?php echo $this->Form->button('Activer',array('class'=>'btn btn-lg btn-login btn-block')); ?>
        </div>
       <?php echo $this->Form->end(); ?>