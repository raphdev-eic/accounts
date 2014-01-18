<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
    public $helpers = array('Form','Html','Time','Text');
    public $components = array(
        'Session',
    	'Cookie',
    	'Auth'=>array(
				'authenticate' => array(
				    'Form' => array(
				        'fields' => array('username' => 'email'),
				        'scope'=>array('User.status' => 1)
				)
			)
    	)
    );

	public function beforeFilter(){
		parent::beforeFilter();
            $this->Auth->loginAction = array('controller'=>'Users','action'=>'login','plugin'=>null);
        //parametrage du cookie de connection
            $this->Cookie->name ='EicCorporation';
            $this->Cookie->domain ='.eic-corporation.com';
            $this->Cookie->path = '/';
            $this->Cookie->time = '3 Days';
            $this->Cookie->key = 'qSI232qs*&11~_+!@#HKAv!@*(XSL#$%)asGb$@is~#sXOw!adre@34S^';
            $this->Cookie->httpOnly = true;

        //on verifie l'existance d'un cookie : si oui redirection vers Apps

    		if($this->Cookie->check('eagleinvestkey')){
    			$this->redirect(Configure::read('apps'));
            }
	}
}