<?php
class StudentsController extends AppController {

	var $name = 'Students';

	function index() {
		$this->Student->recursive = 0;
		$this->set('students', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid student', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('student', $this->Student->findById($id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Student->create();
			if ($this->Student->save($this->data)) {
				$this->Session->setFlash(__('The student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid student', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			if ($this->Student->saveAll($this->data)) {
				$this->Session->setFlash(__('The student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Student->findById($id);
			$sections = $this->Student->Section->find('list');
			$this->set(compact('sections'));
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for student', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Student->delete($id)) {
			$this->Session->setFlash(__('Student deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Student was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function create_slug(){
		
		$students = $this->Student->find('all');
		
		foreach($students as $k=>$d){
			$data['Student'][$k]['id'] = $d['Student']['id'];
			$string = str_replace(' ', '-', strtolower(trim($d['Student']['full_name']))); 
			$data['Student'][$k]['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
		}
	
		if ($this->Student->saveAll($data['Student'])) {
			echo 'Student slug has been updated';
			exit;
		} else {
			echo 'Student slug could not be saved. Please, try again.';
			exit;
		}
	}
}
