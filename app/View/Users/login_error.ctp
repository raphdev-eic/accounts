<section class="login_header">
	<div class="grid">
		<div class="col_12">
			<div class="col_6">
				<a href="http://www.eic-corporation.com">
					<?php echo $this->Html->image('logo_s.png',array('alt'=>'eic corptoration logo')); ?> <span class="log_text">EiC Corporation</span>
				</a>
			</div>
			<div class="col_6">
				<span class="liens"><a href="#">Comment adhére au résaux d’investisseur EiC ?  </a>| <a href="#"> Centre d’aide </a></span>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>
<section class="login_content">
	<div class="grid">
		<div class="col_12">
             <div class="col_6 col-lg-offset-4 border">
                 <h6>Vous avez des problemes de connexions ?</h6>
                 <hr>
                 <!--login eic starting-->
                    <?php echo $this->Session->flash(); ?>
	                <?php echo $this->Form->create('User',array('class'=>'FormLoginError')); ?>
				            <?php echo $this->Form->input('User.email',array('class'=>'col_7_1 ht','placeholder'=>'Réassayez d\'entrez l\'adresse email','label'=>false)); ?>
					           <small><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'iforget')); ?>">Mot de passe oublier</a>
					           </small>
			                   <?php echo $this->Form->input('User.password',array('class'=>'col_7_1 ht','placeholder'=>'Réassayez d\'entrez le Mot de passe','label'=>false));?>
					           <div class="col_7_1">
			                      <?php echo $this->Form->button('Connexion',array('class'=>'blue col_12')); ?>
					           </div>
	                <?php echo $this->Form->end(); ?>
                 <!--end login eic-->
             </div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>