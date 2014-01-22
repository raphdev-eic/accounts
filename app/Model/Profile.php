<?php
App::uses('AppModel', 'Model');
/**
 * Profile Model
 *
 * @property User $User
 */
class Profile extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $validate = array(
       'heritier' => array(
          'rule'=>'notEmpty',
          'message'=>'Cette valeur ne doit pas rester vide',
           'required'=>true
       	),
       'phone'=>array(
          'rule'=>"alphanumeric",
          'message'=>'Entrez un bon format de numero de télephone'
       	),
       'mobile'=>array(
          'rule'=>"alphanumeric",
          'message'=>'Entrez un bon format de numero de mobile'
       	)
	);
}
