<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Html->charset('utf-8'); ?>
    <?php echo $this->Html->meta('viewport','width=device-width, initial-scale=1.0'); ?>
    <?php echo $this->Html->meta('description','eic corporation app , service eic, platform eic , ivoire invest'); ?>
    <?php echo $this->Html->meta('author','eic corporation'); ?>
    <?php echo $this->Html->meta('keyword','dashboard eic corporation, platform'); ?>
    <?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type' => 'icon')); ?> 
    <title><?php echo $this->fetch('title'); ?></title>

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('bootstrap-reset'); ?>
     <!--external css-->
    <?php echo $this->Html->css('assets/font-awesome/css/font-awesome'); ?>
    <!-- Custom styles for this template -->
    <?php echo $this->Html->css('style'); ?>
    <?php echo $this->Html->css('style-responsive'); ?>

    <?php echo $this->fetch('css'); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <?php echo $this->Html->script('respond.min'); ?>
    <![endif]-->
  </head>
   <body class="body-default">
  <section id="main-content">
         <?php echo $this->fetch('content'); ?>
  </section>
      <!--footer start-->
      <!--<footer>
        <div class="text-center">Copyright <?php echo date('Y'); ?> &copy;
         EiC Corporation. Tous droits réservés | Centre d'assistance des investisseurs | <a href="#">conditions d'utilisation</a>  | <a href="#">Engagement de confidentialité</a>
       </div>
      </footer>-->
      <!--footer end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!--<script>window.jQuery || document.write("<?php //echo $this->Html->script('jquery');?>")</script>-->
	<?php echo $this->Html->script('bootstrap.min'); ?>
  <?php echo $this->Html->script('jquery.dcjqaccordion.2.7'); ?>
	<?php echo $this->Html->script('jquery.scrollTo.min'); ?>
	<?php echo $this->Html->script('jquery.nicescroll'); ?>
	<?php echo $this->Html->script('assets/gritter/js/jquery.gritter'); ?>
    <script scr="//cdnjs.cloudflare.com/ajax/libs/holder/2.0/holder.min.js"></script>
    <!--common script for all pages-->
    <?php echo $this->Html->script('common-scripts'); ?>
    <?php echo $this->Html->script('gritter'); ?>
    <?php echo $this->Html->script('main'); ?>
    <?php echo $this->fetch('script'); ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-46080775-1', 'eic-corporation.com');
		  ga('send', 'pageview');
		</script>
 </body>
</html>
