<?php
/**
 * Routes Configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/about-us', array('controller' => 'pages', 'action' => 'display','about-us'));
	Router::connect('/home', array('controller' => 'pages', 'action' => 'display','home'));
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/register', array('controller' => 'users', 'action' => 'register'));
	
	
	Router::connect('/user/:username', array('controller' => 'users', 'action' => 'view'), array('pass' => array('username')));
	Router::connect('/question/:slug', array('controller' => 'questions', 'action' => 'view'), array('pass' => array('slug')));
	Router::connect('/category/:slug', array('controller' => 'categories', 'action' => 'view'), array('pass' => array('slug')));
	Router::connect('/student/:slug', array('controller' => 'students', 'action' => 'view'), array('pass' => array('slug')));
	
	
	
	
	

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
