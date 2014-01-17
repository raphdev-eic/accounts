    <div class="col-lg-8 wrapper-2">
        <?php echo $this->Session->flash(); ?>
          <section class="panel">
                <div class="panel-body">
                    <div class="panel-body">
                      <?php echo $this->Html->image('pentagram.jpg'); ?>
                   <h2 style="text-align:center">Nous vous souhaitons la bienvenue <?php echo ucfirst($user['User']['firstname']); ?> <?php echo ucfirst($user['User']['lastname']); ?></h2>
                   <p style="text-align:center"> Merci de bien vouloir cliquer sur le bouton poursuivre pour continué votre experience parmi nous</p>
                   <div class='col-lg-offset-5'><a href="http://platform.eic-corporation.com" class="btn btn-info">Poursuivre EiC Platform</a></div>
                    </div>
                </div>
          </section>
    </div>
