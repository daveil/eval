<?php
class CategoriesController extends AppController {

	var $name = 'Categories';

	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function view($slug = null) {
		if (!$slug) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('category', $this->Category->findBySlug($slug));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Category->create();
			$string = str_replace(' ', '-', strtolower(trim($d['Category']['name']))); 
			$this->data['Category']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
			
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($slug = null) {
		if (!$slug && empty($this->data)) {
			$string = str_replace(' ', '-', strtolower(trim($d['Category']['name']))); 
			$this->data['Category']['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
			
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->findBySlug($slug);;
		}
		if(is_numeric($slug)){
			$this->data = $this->Category->read(null, $slug);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash(__('Category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function create_slug(){

		
		$questions = $this->Category->find('all');
		
		foreach($questions as $k=>$d){
			$data['Category'][$k]['id'] = $d['Category']['id'];
			$string = str_replace(' ', '-', strtolower(trim($d['Category']['name']))); 
			$data['Category'][$k]['slug'] = preg_replace('/[^A-Za-z0-9\-]/', '-', $string);
		}
	
		if ($this->Category->saveAll($data['Category'])) {
			echo 'Category slug has been updated';
			exit;
		} else {
			echo 'Category slug could not be saved. Please, try again.';
			exit;
		}
		
	}
}
