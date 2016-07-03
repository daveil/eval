<?php
class EvaluationResultsController extends AppController {

	var $name = 'EvaluationResults';

	function index() {
		$this->EvaluationResult->recursive = 0;
		$this->set('evaluationResults', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation result', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluationResult', $this->EvaluationResult->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EvaluationResult->create();
			if ($this->EvaluationResult->save($this->data)) {
				$this->Session->setFlash(__('The evaluation result has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation result could not be saved. Please, try again.', true));
			}
		}
		$evaluations = $this->EvaluationResult->Evaluation->find('list');
		$categories = $this->EvaluationResult->Category->find('list');
		$this->set(compact('evaluations', 'categories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation result', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EvaluationResult->save($this->data)) {
				$this->Session->setFlash(__('The evaluation result has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation result could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EvaluationResult->read(null, $id);
		}
		$evaluations = $this->EvaluationResult->Evaluation->find('list');
		$categories = $this->EvaluationResult->Category->find('list');
		$this->set(compact('evaluations', 'categories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluation result', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EvaluationResult->delete($id)) {
			$this->Session->setFlash(__('Evaluation result deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluation result was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
