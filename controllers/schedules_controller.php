<?php
class SchedulesController extends AppController {

	var $name = 'Schedules';
	var $uses = array('Schedule','Student');
	function index() {
		if($_GET['url']=='schedules?active'){
			$conditions = array('Schedule.status'=>'active');
			$user = $_SESSION['Auth']['User'];
			if(!$user['is_admin']){
				$student  = $this->Student->findByUserId($user['id']);
				$section_id = $student['Student']['section_id'];
				$conditions['Schedule.section_id']=$section_id;
			}
			$schedules = $this->Schedule->find('all',compact('conditions'));
			return $schedules;
		}else{
			$this->Schedule->recursive = 0;
			$this->set('schedules', $this->paginate());
		
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('schedule', $this->Schedule->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Schedule->create();
			if ($this->Schedule->save($this->data)) {
				$this->Session->setFlash(__('The schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.', true));
			}
		}
		$sections = $this->Schedule->Section->find('list');
		$this->set(compact('sections'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid schedule', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Schedule->save($this->data)) {
				$this->Session->setFlash(__('The schedule has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schedule could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Schedule->read(null, $id);
		}
		$sections = $this->Schedule->Section->find('list');
		$this->set(compact('sections'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for schedule', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Schedule->delete($id)) {
			$this->Session->setFlash(__('Schedule deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Schedule was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
