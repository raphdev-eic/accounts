<?php

App::uses('AppController','Controller');

class ProfilesController extends AppController{

	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
		public function beforeFilter() {
			parent::beforeFilter();
			if($this->Session->check('IdUser')){
			   $this->Auth->allow('AddProfil');
			}
		}

		public function AddProfil(){

	        //on verifie que les données utilisateurs sont poster et on enregistre

	        if(!empty($this->request->data) && $this->request->is('post')){
	          	$this->request->data['Profile']['user_id'] = $this->Session->read('IdUser');
	            $this->Profile->create();
	            if($this->Profile->save($this->request->data)){
	                $this->redirect(array('controller'=>'Users','action'=>'info'));
	            }

            $this->Session->setFlash('Désoler vous avez commis des lors du renseignement du formulaire','error');
            }
		}
}