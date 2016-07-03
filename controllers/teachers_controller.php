<?php
class TeachersController extends AppController {

	var $name = 'Teachers';

	function index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacher', $this->Teacher->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Teacher->create();
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Teacher->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Teacher->delete($id)) {
			$this->Session->setFlash(__('Teacher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
