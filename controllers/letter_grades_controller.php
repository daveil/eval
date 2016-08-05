<?php
class LetterGradesController extends AppController {

	var $name = 'LetterGrades';

	function index() {
		$this->LetterGrade->recursive = 0;
		$this->set('letterGrades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid letter grade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('letterGrade', $this->LetterGrade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LetterGrade->create();
			if ($this->LetterGrade->save($this->data)) {
				$this->Session->setFlash(__('The letter grade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The letter grade could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid letter grade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LetterGrade->save($this->data)) {
				$this->Session->setFlash(__('The letter grade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The letter grade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LetterGrade->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for letter grade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LetterGrade->delete($id)) {
			$this->Session->setFlash(__('Letter grade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Letter grade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
