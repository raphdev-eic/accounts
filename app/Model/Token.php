<?php
App::uses('AppModel','Model');
class Token extends AppModel{

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function sendmail($data,$link = null){
		$this->set($data);
		App::uses('CakeEmail','Network/Email');
		$mail = new CakeEmail();
		$mail->from('supports@eic-corporation.com')
			 ->to($data['email'])
			 ->subject("Comment réinitialiser le mot de passe de votre identifiant EiC Corporation")
			 ->emailFormat('html')
			 ->template('default')
			 ->viewVars(array('data'=>$data,'link'=>$link));
		return $mail->send();
	}
}