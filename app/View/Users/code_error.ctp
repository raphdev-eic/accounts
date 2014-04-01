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
                 <h6>Vous avez un problème sur votre code investisseur ?</h6>
                 <hr>
			 <!--key form-->
					 <?php echo $this->Form->create('User',array('inputDefaults'=>array('div'=>false))); ?>
					 <?php echo $this->Form->input('key',array('placeholder'=>'Réassayez d\'entrez votre code','label'=>false,'class'=>'col_7 ht')); ?>
		             <?php echo $this->Form->button('Valider',array('class'=>'button orange')); ?>
		             <?php echo $this->Form->end(); ?>
		             <!--end key form-->
             </div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>