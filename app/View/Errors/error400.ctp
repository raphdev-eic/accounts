<?php $this->layout = "error"; ?>
<section class="error-wrapper">
    <i class="icon-404"></i>
    <h1>400</h1>
    <h2>Page introuvable</h2>
    <p class="page-404">Quelque chose s'est mal passé ou que la page n'existe pas encore. <a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'login')); ?>">Retour a l'accueil</a></p>
</section>