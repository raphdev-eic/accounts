<?php
App::uses('AppModel', 'Model');
class User extends AppModel {
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
		),
		'Token'=>array(
			'className' => 'Token',
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
	    	),
	    'rule3username'=>array(
	    	  'rule'=>"alphaNumeric",
	    	  'message'=>"Le nom doit seulement comporter des caractères alphanumeriques"
	        ),
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
    'parts'=>array(
         'rule'=>'numeric',
         'message'=>'Le nombre de parts doit être numerique'
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

    public function detectIOS(){
		if (ereg("Win", getenv("HTTP_USER_AGENT")))
		  $os = "Windows";
		elseif ((ereg("Mac", getenv("HTTP_USER_AGENT"))) || (ereg("PPC", getenv("HTTP_USER_AGENT"))))
		  $os = "Mac";
		elseif (ereg("Linux", getenv("HTTP_USER_AGENT")))
		  $os = "Linux";
		elseif (ereg("FreeBSD", getenv("HTTP_USER_AGENT")))
		  $os = "FreeBSD";
		elseif (ereg("SunOS", getenv("HTTP_USER_AGENT")))
		  $os = "SunOS";
		elseif (ereg("IRIX", getenv("HTTP_USER_AGENT")))
		  $os = "IRIX";
		elseif (ereg("BeOS", getenv("HTTP_USER_AGENT")))
		  $os = "BeOS";
		elseif (ereg("OS/2", getenv("HTTP_USER_AGENT")))
		  $os = "OS/2";
		elseif (ereg("AIX", getenv("HTTP_USER_AGENT")))
		  $os = "AIX";
		else
		  $os = "Autre";
		return $os;
    }

}