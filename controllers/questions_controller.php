<?php
class QuestionsController extends AppController {

	var $name = 'Questions';

	function index() {
		$this->Question->recursive = 0;
		$this->set('questions', $this->paginate());
	}

	function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		
		}
		$this->set('question', $this->Question->findBySlug($slug));
	}

	function add() {
		if (!empty($this->data)) {
			$string = str_replace(' ', '-', strtolower(trim($d['Question']['question']))); 
			$this->data['Question']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
			
			$this->Question->create();
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Question->Category->find('list');
		$this->set(compact('categories'));
	}

	function edit($slug = null) {
		if (!$slug && empty($this->data)) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$string = str_replace(' ', '-', strtolower(trim($d['Question']['question']))); 
			$this->data['Question']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->findBySlug($slug);
		}
		$categories = $this->Question->Category->find('list');
		$this->set(compact('categories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Question->delete($id)) {
			$this->Session->setFlash(__('Question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function create_slug(){

		
		$questions = $this->Question->find('all');
		
		foreach($questions as $k=>$d){
			$data['Question'][$k]['id'] = $d['Question']['id'];
			$string = str_replace(' ', '-', strtolower(trim($d['Question']['question']))); 
			$data['Question'][$k]['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
		}
	
		if ($this->Question->saveAll($data['Question'])) {
			echo 'Question slug has been updated';
			exit;
		} else {
			echo 'Question slug could not be saved. Please, try again.';
			exit;
		}
		
	}
}
