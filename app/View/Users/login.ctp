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
			<div class="col_6">
				<div class="bloc_text">
					<p>Investir en Bourse, c’est transformer nos idées de projets en une réalité. Rejoingnez dès maintenant Notre Réseau d’investisseurs privés
					</p>
				</div>
				<?php echo $this->Html->image('login_img.jpg',array('alt'=>'eic corptoration brand','class'=>'brand_img')); ?>
			</div>
			<div class="col_6">
			 <!--key form-->
			 <h6 class="tcolor">Premier pas sur notre plateforme en tant qu’investisseur ?</h6>
			 <?php echo $this->Form->create('User',array('inputDefaults'=>array('div'=>false))); ?>
			 <?php echo $this->Form->input('key',array('placeholder'=>'Entrez votre code','label'=>false,'class'=>'col_7 ht')); ?>
             <?php echo $this->Form->button('Valider',array('class'=>'button orange')); ?>
             <?php echo $this->Form->end(); ?>
             <!--end key form-->
             <hr>
             <!--login form-->
             <h6 class="tcolor">Déja Membre de notre Corporation d’investisseurs ?</h6>
                <?php echo $this->Form->create('User'); ?>
		            <?php echo $this->Form->input('User.email',array('class'=>'col_7_1 ht','placeholder'=>'Adresse email','label'=>false)); ?>
			           <small><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'iforget')); ?>">Mot de passe oublier</a>
			           </small>
		            <?php echo $this->Form->input('User.password',array('class'=>'col_7_1 ht','placeholder'=>'Mot de passe','label'=>false));?>
			           <div class="col_6 tcolor">
				           	<small>
								En cliquant sur Connexion, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données, y compris notre Utilisation des cookies.
				           	</small>
			           </div>
		           <div class="pull-right col_7_1">
                      <?php echo $this->Form->button('Connexion',array('class'=>'blue')); ?>
		           </div>
                <?php echo $this->Form->end(); ?>
             <!--end login form-->
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>