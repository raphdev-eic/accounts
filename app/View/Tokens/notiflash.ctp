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
         <div class="col-lg-4">
           <h4>Réinitialiser votre mot de passe ou votre identifiant de EiC</h4>
         </div>
            <div class="col-lg-7">
              <section class="panel">
                <div class="panel-body">
                  <div class="col-lg-7"> <?php echo $this->Session->flash(); ?></div>
                  Lorsque vous recevez vos informations de connexion, suivez les instructions contenues dans l’e-mail pour réinitialiser votre mot de passe. </a>
                </div>
              </section>
            </div>
         </div>
       </div>
       <div class="cl"></div>
   </div>
 </section>