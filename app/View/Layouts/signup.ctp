<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $this->Html->charset('utf-8'); ?>
    <?php echo $this->Html->meta('viewport','width=device-width, initial-scale=1.0'); ?>
    <?php echo $this->Html->meta('description','eic corporation app , service eic, platform eic , ivoire invest'); ?>
    <?php echo $this->Html->meta('author','eic corporation'); ?>
    <?php echo $this->Html->meta('keyword','dashboard eic corporation, platform'); ?>
    <?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type' => 'icon')); ?> 
    <title>Authentification | EiC Corporation</title>

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
 <body class="login-body">
  <?php echo $this->fetch('button-content'); ?>
  <section class="wrapper">
    <div class="container">
         <?php echo $this->fetch('content'); ?>
    </div>
  </section>
<!--footer start-->
      <footer class="site-footer">
        <div class="text-center"><?php echo date('Y'); ?> &copy; EiC Corporation. | Centre d'authifictaion investisseur<a href="#" class="go-top"><i class="icon-angle-up"></i></a></div>
      </footer>
<!--footer end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!--<script>window.jQuery || document.write("<?php //echo $this->Html->script('jquery');?>")</script>-->
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
