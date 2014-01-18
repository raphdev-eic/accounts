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

/**
 * [login description]
 * @return [type] [description]
 */


	public function login(){
		//initialisation des redirection par type de user
		$continu[0] = Configure::read('manager');
		$continu[1] = Configure::read('platform');
		//16-01-2014 : verifier si un cookie existe au cas ou celui-ci n'a pas été detruire
		/*if($this->Cookie->check('eagleinvestkey')){
            $this->Cookie->destroy('eagleinvestkey');
		}*/

        // si les données ne son pas vide

		if(!empty($this->request->data)){

			//si les données poster son en POST

            if($this->request->is('post')){

				if($this->Auth->login()){

					$this->Cookie->write('eagleinvestkey', $this->Session->read('Auth.User.id'),true);
					$this->redirect($continu[1]);

				}else{

					$this->Session->setFlash('Votre mot de passe ou votre email sont incorrects. <strong>Si vous n\'avez pas encore activé votre compte veuillez allez la page de d\'activation de code en cliquant sur le bouton ci-dessus</strong>', 'error');
				}
            }
		}
	}



/**
 * [statuteBook  code investisseur request]
 * @return [type] [description]
 */


	public function statuteBook(){

	    if(!empty($this->request->data)){

		    //verifie si la methode d'envoi de code est post

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

                    // au cas ou son code est deja entré dans notre base de donnée

	                  $this->Session->setFlash("Votre compte est déja actif, veuillez vous identifier pour avoir accès à votre platform investisseur  en cas d'autre soucis infromer la corporation ",'success');
	                  $this->redirect(array('action'=>'login'));

			  	    }

                $this->Session->setFlash("Votre code d'accès fourni est invalide, veuillez contacter la corporation",'error');

		    }
		}
	}
}

/**
 * affiche les droits des users
 */

	public function agrement(){
        $this->layout = "default";
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
	            $this->Cookie->write('eagleinvestkey', $this->Session->read('IdUser'),true, 3600 * 24 * 3);
	            $this->Session->delete('IdUser');
	        }
	        $this->set(compact('user'));
        }
	}

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

                        // on determine l'id de l'utilisateur

                        $this->User->id = $this->Session->read('IdUser');

                        // on ne crée plus de nouvelle enregistrement , on effectue une modification et on fait les verification des mot de passe

                        if($this->User->save($this->request->data,true,array('username','password','status','domain_id'))){
                            $this->redirect(array('controller'=>'Profiles','action'=>'AddProfil'));
                        }

                        $this->Session->setFlash('Erreur de saisie , verifier bien les informations du formulaire','error');
                    }
	        	}
	        }
	}
}