<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Compte $Compte
 * @property Profile $Profile
 * @property Rank $Rank
 * @property Team $Team
 * @property Domaine $Domaine
 * @property Role $Role
 * @property Program $Program
 * @property Country $Country
 * @property City $City
 * @property Pack $Pack
 * @property User $ParentUser
 * @property Avatar $Avatar
 * @property Bordero $Bordero
 * @property Comission $Comission
 * @property Devi $Devi
 * @property Innoice $Innoice
 * @property Last $Last
 * @property Membership $Membership
 * @property Notification $Notification
 * @property Transaction $Transaction
 * @property Ugrade $Ugrade
 * @property Upart $Upart
 * @property User $ChildUser
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Compte' => array(
			'className' => 'Compte',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Rank' => array(
			'className' => 'Rank',
			'foreignKey' => 'rank_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Domaine' => array(
			'className' => 'Domaine',
			'foreignKey' => 'domaine_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Program' => array(
			'className' => 'Program',
			'foreignKey' => 'program_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentUser' => array(
			'className' => 'User',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Avatar' => array(
			'className' => 'Avatar',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Bordero' => array(
			'className' => 'Bordero',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Devi' => array(
			'className' => 'Devi',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Innoice' => array(
			'className' => 'Innoice',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Last' => array(
			'className' => 'Last',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Notification' => array(
			'className' => 'Notification',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Ugrade' => array(
			'className' => 'Ugrade',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Upart' => array(
			'className' => 'Upart',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ChildUser' => array(
			'className' => 'User',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

   public function ListRank(){
    	$list = $this->Rank->find('list');
    	return $list;
    }

    public function ListTeam(){
    	$list = $this->Team->find('list');
    	return $list;
    }

    public function ListDomaine(){
    	$list = $this->Domaine->find('list');
    	return $list;
    }

    public function ListRole(){
    	$list = $this->Role->find('list');
    	return $list;
    }

    public function ListProgm(){
    	$list = $this->Program->find('list');
    	return $list;
    }

    public function ListCountry(){
    	$list = $this->Country->find('list');
    	return $list;
    }

    public function ListCity(){
    	$list = $this->City->find('list');
    	return $list;
    }

    public function ListPack(){
    	$list = $this->Pack->find('list');
    	return $list;
    }

    //regle de validation des données

    public $validate = array(

    'username'=>array(
	    'rule1username'=>array(
	           'rule'=>'isUnique',
	           'message'=>'ce username est déja utiliser',
	           'allowEmpty'=>false,
	           'required'=>true
	         ),
	    'rule2username'=>array(
	          'rule'=> array('between', 5, 10),
	          'message' => 'Le username doit avoir une longueur comprise entre 5 et 10 caractères.'
	    	)
    ),
    'password'=>array(
          'rule'=>'notEmpty',
          'message'=>'Ce champs doit pas rester vide',
          'allowEmpty'=>false,
          'required'=>true
    ),
    'email'=>array(
          'rule'=>'isUnique',
          'message'=>'Cette adresse email est déja prise',
          'allowEmpty'=>false,
          'required'=>true
    ),
    'code'=>array(
          'rule'=>'isUnique',
          'message'=>"Ce code d'accès est deja utiliser",
          'allowEmpty'=>false,
          'required'=>true
    ),
    'key_auth'=>array(
          'rule'=>'isUnique',
          'message'=>'Ce investor code est déja utiliser',
          'allowEmpty'=>false,
          'required'=>true
    ),
    'firstname'=>array(
          'rule'=>'notEmpty',
          'message'=>'Renseignez une valeur',
          'allowEmpty'=>false,
          'required'=>true
    ),
        'lastname'=>array(
          'rule'=>'notEmpty',
          'message'=>'Renseignez une valeur',
          'allowEmpty'=>false,
          'required'=>true
    ),
    /*'membership'=>array(
	      'rule'=>'numeric',
	      'message'=>'Ce valeur doit être numerique',
	      'required'=>true
    ),*/
    'parts'=>array(
         'rule'=>'numeric',
         'message'=>'Le nombre de parts doit être numerique'
     ),
    'pass'=>array(
    	'rule'=>'CheckPassword',
    	'message'=>'les mots de passe ne correspond pas'
    	)
    );

    //generation de code d'inscription

    public function genarateCodeinc( $num = 12 ){
            $resultat = array();
            $user ="";
            $username = "abcdefghijklmnpqrstuvwxy123456789ABCDEFGHIJKLMNPQRSTUVWXY";
            srand((double)microtime()*1000000);
                for($i=0; $i<$num; $i++) {
                $user .= $username[rand()%strlen($username)];
                }
            $resultat=$user;
            return $resultat;
    }

    //generation du key auth

    public function generateKeyAuth( $num = 32){
            $resultat = array();
            $user ="";
            $username = "abcdefghijklmnpqrstuvwxy123456789ABCDEFGHIJKLMNPQRSTUVWXY";
            srand((double)microtime()*1000000);
                for($i=0; $i<$num; $i++) {
                $user .= $username[rand()%strlen($username)];
                }
            $resultat = $user;
            return $resultat;
    }

    public function CheckPassword(){
		if($this->data[$this->alias]['password'] == Security::hash($this->data[$this->alias]['pass'],null,true)){
		    return true;
		}
		return false;
    }


}
