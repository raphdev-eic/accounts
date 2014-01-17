<?php

	Router::connect('/', array('controller' => 'Users', 'action' => 'login'));

	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
