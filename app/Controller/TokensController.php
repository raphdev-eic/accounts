<?php
App::uses('AppController', 'Controller');
class TokensController extends AppController{

/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('iforgetPassUser','iforgetIdUser','notiflash'));
	}

	public function iforgetPassUser(){
	     if(!empty($this->request->data)){
	     	//debug($this->request->data);die();
          //recherche un email existant
          $checkmail = $this->Token->User->find('first',array(
          	'contain'=>array('Token'),
          	'conditions'=>array('User.email'=>$this->request->data['token']['email'])
          	));
          if(!empty($checkmail)){
          	//creation d'une key de token
            $key = $this->Token->User->genarateCodeinc(64);
            //creation d'un lien pour l'envoi par mail
            $link = Router::url(array('controller' => 'Users', 'action' => 'iforgetChangePass',
            	'?'=>array('key'=>$key,'keyid'=>$checkmail['User']['id'])),true);
             //envoi d'un email avec le lien
             if($this->Token->sendmail($checkmail['User'],$link)){
            //creation de l'enregistrement
	            if($this->Token->save(array(
	            	'key'=>$key,
	            	'user_id'=>$checkmail['User']['id'],
	            	'active'=>0
	            	),false))
	            {
	             	$this->Session->setFlash('Vous venez de recevoir un mail
	             	avec un lien pour la modification de votre mot de passe ','success');
	             	$this->redirect(array('action'=>'notiflash'));
                }
            }else{
             $this->Session->setFlash('Une erreur est sur venu lors de votre demande veuillez réessayer','error');
             $this->redirect($this->referer());
            }
	    }
	  }
    }


	public function notiflash(){
        $this->layout = 'default';
	}

	public function iforgetIdUser(){

	}

}

