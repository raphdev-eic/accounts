<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->fetch('title');?></title>
        <meta charset="UTF-8">
        <?php echo $this->Html->meta('UTF-8'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="" />
        <meta name="copyright" content="" />
         <!-- KICKSTART -->
         <!-- CUSTOM STYLES -->
            <?php echo $this->Html->css('kickstart',array('media'=>'all'));  ?>
            <?php echo $this->Html->css('style',array('media'=>'all'));  ?>
          <!-- KICKSTART -->
    </head>
<body>

<!-- bar Horizontal -->

<!-- ===================================== END HEADER ===================================== -->
<!--start content-->
     <?php echo $this->fetch('content'); ?>
<!-- END content -->

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2013–<?php echo date('Y'); ?> All Rights Reserved. This application was built with <a href="http://www.eic-corporation.com">EiC Corporation</a>
</div>
    <!--starting scripts-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <?php echo $this->Html->script('kickstart'); ?>
    <!--end scripts-->
</body>
</html>