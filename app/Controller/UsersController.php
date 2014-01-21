<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {
	public $layout = 'signup';
	public function beforeFilter(){
		    parent::beforeFilter();
		    $this->Auth->allow('statuteBook');
			if($this->Session->check('IdUser')){
			   $this->Auth->allow(array('signin','agrement','info'));
			}
	}



    public  function login(){
       if($this->request->is('post')){
            if($this->Auth->login()){
					$this->Cookie->write('eagleinvestkey', $this->Session->read('Auth.User.id'),true, 3600 * 24 * 3);
					$this->redirect(Configure::read('platform'));
            }else{
                $this->Session->setFlash('Votre mot de passe ou votre email sont incorrects.
                	<strong>Si vous n\'avez pas encore activé votre compte veuillez allez
                	 la page de d\'activation de code en cliquant sur le bouton ci-dessus</strong>',
                	  'error'
                );
           }
        }
    }
}