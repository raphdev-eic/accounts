<?php echo $this->assign('title','Eic - Code investisseur'); ?>
<?php echo $this->start('button-content'); ?>
	<div class="header-auth">
		<div class="content-header-auth span6 offset9">
		  <span>Vous etes déja inscrit ? Cliquez ici  </span> <a href="<?php echo $this->Html->url(array('Controller'=>'Users','action'=>'login')); ?>" class="btn btn-info">connexion</a>
		</div>
		<div class="clearfix"></div>
	</div>
<?php echo $this->end(); ?>