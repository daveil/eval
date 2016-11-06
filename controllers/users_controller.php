<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $uses = array('User','Student');
	function beforeFilter(){ 
		parent::beforeFilter();
		$this->Auth->userModel = 'User'; 
		$this->Auth->allow(array('register','login','check','logout'));	
    } 
	
	function login() {
			
    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }
	
	function register() {
		if ($this->data) {
			if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['confirm_password'])) {
				$this->User->create();
				$this->User->recursive=0;
				$this->Student->recursive=0;
				if($this->User->save($this->data)){
					$this->data['Student']['user_id']=$this->User->id;
					$this->Student->save($this->data['Student']);
					$this->Session->setFlash(__('User created', true));	
					
					$data = $this->User->read(); 
					$this->Auth->login($data);
					$this->redirect('/');
				}
			}
		}
		$sections = $this->User->Student->Section->find('list');
		$this->set(compact('sections'));
	}
	
	function check(){
		if ($this->RequestHandler->isAjax()) {
			if(!empty($this->data)){
				$result = $this->User->find('count',array('conditions'=>array('User.username'=>$this->data['User']['username'])));
				$response['result']=$result;
				if($result){
					$response['status']="ERROR";
					$response['message']="Username unavailable.";
				}else{
					$response['status']="OK";
					$response['message']="Username available.";
				}
			}else{
				$response['status']="ERROR";
				$response['message']="Empty data.";
			}
		}
		echo json_encode($response);
		Configure::write('debug', 0);
		exit;
	}
	
	
	function account_setting() {
		if (!empty($this->data)) {
			if(isset($this->data['User']['new_password'])){
				$this->data['User']['password'] = Security::hash($this->data['User']['new_password'], NULL, true);
			}
		
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('User account updated', true));	
				$this->redirect('/');
			} else {
				$this->Session->setFlash(__('User account can not be updated. Pls. try again', true));	
			}
		}
		$data = $this->Auth->user();
		$data =  $this->Student->findByUserId($data['User']['id']);
		$sections = $this->Student->Section->find('list');
		$this->set(compact('data','sections'));
	}
	
	function check_password(){
		$hash_curretpassword = Security::hash($this->data['User']['current_password'], NULL, true);
		$user = $this->User->findById($this->Auth->user('id'));
		
		if($hash_curretpassword == $user['User']['password']){
			$response['status']="OK";
			$response['message']="Correct Password.";
		}else{
			$response['status']="ERROR";
			$response['message']="Incorrect Password.";
		}
		echo json_encode($response);
		exit;
	}

	
	
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($username = null) {
		if (!$username) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->findByUsername($username));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($username = null) {
		if (!$username && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->findByUsername($username);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
}
