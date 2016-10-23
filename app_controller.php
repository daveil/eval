<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	public $components = array(
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => '',
                'action' => 'home'
            ),
            'logoutRedirect' => array(
                'controller' => '',
                'action' => 'home'
            ),
			'authorize '=>'controller'
        ), 
        'Session',
		'RequestHandler',
    );
	
	public $loggedIn = false;
	
	function beforeFilter(){
		if ($this->params['controller'] == 'pages') {
			$this->Auth->allow('*'); 
		}
		
		$user = $this->Auth->user();
		$this->set('user', $user);

		if($this->params['controller']=='contents'){
			if(!$user['User']['is_admin']){
				$this->Session->setFlash('Invalid access to content.');
				$this->redirect('/');
			}
				
		}
		App::Import('Model','Teacher');
		$this->Teacher = new Teacher;
		$this->Teacher->recursive=0;
		$Teachers =  $this->Teacher->find('all');
		$this->set(compact('Teachers'));
		return parent::beforeFilter();
		
	}
}
