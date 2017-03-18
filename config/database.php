<?php
class DATABASE_CONFIG {
	var $remote = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'eval_170318',
		'password' => 'j3j3m00n',
		'database' => 'eval',
	);
	
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'eval_170318',
	);
	function __construct() {
		if(isset($_SERVER['HTTP_HOST']))
			if($_SERVER['HTTP_HOST']!='localhost'){
				$this->default =  $this->remote;
			}
	}
}
?>