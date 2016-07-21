<?php
class EvaluationsController extends AppController {

	var $name = 'Evaluations';
	var $uses = array('Evaluation','Category');
	function index() {
		$this->Evaluation->recursive = 0;
		$this->set('evaluations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evaluation', $this->Evaluation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Evaluation->create();
			if ($this->Evaluation->saveAll($this->data)) {
				$this->Session->setFlash(__('Successfully Submitted', true));
				$this->redirect(array('action' => 'success'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if(isset($this->params['named']['teacher_id'])){
			$teacher_id = $this->params['named']['teacher_id'];
			$teacher = $this->Evaluation->Teacher->findById($teacher_id);
			$teacher_name = $teacher['Teacher']['full_name'];
			$this->set(compact('teacher_id', 'teacher','teacher_name'));
		}
		$students = $this->Evaluation->Student->find('list');
		$teachers = $this->Evaluation->Teacher->find('list');
		$categories = $this->Category->find('all');
		$questions = $this->Category->Question->find('all');
		$group_questions = array();
		//Initialize group_questions[category] 
		foreach($categories as $category){
			$cat_id =  $category['Category']['id'];
			$group_questions[$cat_id] = array();
		}
		//Push questions to group_questions[category]
		foreach($questions as $question){
			$cat_id =  $question['Question']['category_id'];
			array_push($group_questions[$cat_id],$question);
		}
			
		$student_id = 1;
		$this->set(compact('students', 'teachers','categories','group_questions','student_id'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evaluation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evaluation->save($this->data)) {
				$this->Session->setFlash(__('The evaluation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evaluation->read(null, $id);
		}
		$students = $this->Evaluation->Student->find('list');
		$teachers = $this->Evaluation->Teacher->find('list');
		$this->set(compact('students', 'teachers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evaluation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Evaluation->delete($id)) {
			$this->Session->setFlash(__('Evaluation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evaluation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function success(){}
}
