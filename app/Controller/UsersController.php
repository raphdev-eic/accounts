<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController{

	public $layout = 'signup';

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(array('statuteBook','iforget','iforgetChangePass'));
		if($this->Auth->loggedIn()){
			$this->Auth->allow('CookieCheck');
		}

		if($this->Session->check('IdUser')){
		   $this->Auth->allow('signin','agrement','info');
		}
	}

	/**
	 * [login description]
	 * @return [type] [description]
	 */
    public function login() {
        if($this->request->is('post')){
           $user = $this->Auth->identify($this->request, $this->response);
           if($user){
               $this->Session->write('Auth.User', $user);
               return $this->redirect(array('controller' => 'Users', 'action' => 'CookieCheck'));
           }else{
	        $this->Session->setFlash("<h5><strong> Veuillez confirmer votre mot de passe. </strong><h5><br/> Le mot de passe ou l'adresse email que vous avez saisi est incorrect. Veuillez réessayer ? (Ou vérifier si votre compte est déja activé...)",'error');
           }
       }
    }

    /**
     * [statuteBook description]
     * @return [type] [description]
     */

	public function statuteBook(){
	  if(!empty($this->request->data)){
	      //verifie si la methone d'envoi de code est post
		  if($this->request->is('get')){
		  	throw new BadRequestException("Le Type de requete d'envoi du code est interdit", 400);
		  }

		  if($this->request->is('post')){
			  	$d = $this->request->data;
			  	$key = $this->User->find('first',array(
	              'conditions'=>array('User.code'=>$d['User']['key'])
			  	));
			  	if(!empty($key)){
	               //on verifier que le status est == 0
			  	   if($key['User']['status'] == 0){
	                   $this->Session->write('IdUser',$key['User']['id']);
	                   $this->Session->write('CodeUser',$key['User']['code']);
	                   $this->redirect(array('action'=>'agrement'));
			  	    }else{
	                  $this->Session->setFlash("Votre compte est déja actif, veuillez vous identifier pour avoir accès à votre platform investisseur  en cas d'autre soucis infromer la corporation ",'success');
	                  $this->redirect(array('action'=>'login'));
			  	    }
			  	}
             $this->Session->setFlash("Votre code d'accès fourni est invalide, veuillez contacter la corporation",'error');
		   }
		}
	}

	/**
	 * page de lecture des conditions d'utilisation
	 * page de lecture des lois de confidentialité
	 */

	public function agrement(){
         $this->layout = 'default';
	}

    /**
     * [info description]
     * @return [type] [description]
     */
	public function info(){
      $this->layout = 'default';
      if($this->Session->check('IdUser')){

        $user = $this->User->find('first',array(
           'conditions'=>array('User.id'=>$this->Session->read('IdUser'))
        ));

	        if(!empty($user)){
	            // je loggue le user en cours
	            if(!$this->Auth->loggedIn()){
	            	$this->Auth->login($user);
	            }

	            //on creer un cookie
	            $this->Cookie->write('EicAuth', $this->Session->read('IdUser'),true, 3600 * 24 * 3);
	            $this->Session->delete('IdUser');
	        }
	        $this->set(compact('user'));
        }
	}

     /**
      * [signin description]
      * @return [type] [description]
      */

	public function signin(){
			$this->layout = 'default';
	        //liste deroulante des pays et domaine
	        $listDomaine = $this->User->listDomaine();
	        $this->set(compact('listDomaine'));

	        if(!empty($this->request->data)){
	        	if($this->request->is('post')){
	        		$this->request->data['User']['status'] = 1;
	        		//verifie si un mot de passe est fournie
	        		if(!empty($this->request->data['User']['password'])){
                       $this->request->data['User']['password'] = Security::hash($this->request->data['User']['password'],null,true);
                    }
                    if($this->Session->check('IdUser')){
                        $this->User->id = $this->Session->read('IdUser');

                        // on sauverge
                        if($this->User->save($this->request->data,true,array('username','password','status','domain_id'))){
                            $this->redirect(array('controller'=>'Profiles','action'=>'AddProfil'));
                        }
                        $this->Session->setFlash('Erreur de saisie , verifier bien les informations du formulaire','error');
                    }

	        	}
	        }
	}

     /**
      * [CookieCheck description]
      */
	public function CookieCheck(){
		if($this->Auth->loggedIn()){
            $this->Cookie->write('EicAuth', $this->Session->read('Auth.User.id'),true, 3600 * 24 * 3);
            $this->redirect(Configure::read('platform'));
		}
	}

	public function iforget(){
      $this->layout = 'default';
	}

    public function iforgetChangePass($key = null, $keyid = null) {
    	//verifion que les clé existe bien dans l'url
    	if(!$this->request->query['key']){
    		throw new BadRequestException("Error Processing Request", 400);
    	}
    	if(!$this->request->query['keyid']){
    		throw new BadRequestException("Error Processing Request", 400);
    	}
	}
}