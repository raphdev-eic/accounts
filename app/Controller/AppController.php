<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
    public $helpers = array('Form','Html','Time','Text');
    public $components = array('Session',
    	'Cookie'=>array(
    		    'name'=>'EicCorporation',
    		    'domain'=>'.eic-corporation.com',
    		    'path'=>'/',
    		    'key'=>'qSI232qs*&11~_+!@#HKAv!@*(XSL#$%)asGb$@is~#sXOw!adre@34S^',
    		    'httpOnly'=>true
    	),
    	'Auth'=>array(
				'authenticate' => array(
				    'Form' => array(
				        'fields' => array('username' => 'email'),
				        'scope'=>array('User.status'=>1)
				)
			)
    	)
    );

	public function beforeFilter(){
		parent::beforeFilter();
		if($this->Cookie->check('EicAuth')){
			$this->redirect(Configure::read('apps'));
        }
	}
}