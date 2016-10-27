<?php
class DATABASE_CONFIG {
	var $remote = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'lcnsh_admin',
		'password' => 'j3j3m00n',
		'database' => 'eval',
	);
	
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'eval',
	);
	function __construct() {
		if($_SERVER['HTTP_HOST']!='localhost'){
			$this->default =  $this->remote;
		}
	}
}
?>