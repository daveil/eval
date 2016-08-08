<?php
class EvaluationsController extends AppController {

	var $name = 'Evaluations';
	var $uses = array('Evaluation','Category','LetterGrade');
	
	function index() {
		if (!empty($this->data)) {
			$this->Evaluation->recursive =2;
			$evaluation = $this->Evaluation->findByTeacherId($this->data['Evaluation']['teacher_id']);
			$results = $this->Evaluation->getAverageResult($this->data['Evaluation']['teacher_id']);
			//pr($results);exit;
		
			foreach($results as $k => $r){
				$results[$k]['0']['letter_score'] = $this->LetterGrade->getLetterEquivalent($results[$k]['0']['average_score']);
				$results[$k]['0']['letter_result'] = $this->LetterGrade->getLetterEquivalent($results[$k]['0']['average_result']);	
			}
			//pr($results);exit;
			
			$this->set(compact('evaluation','results'));
			
			
			
		}
		$teachers = $this->Evaluation->Teacher->find('list');
		$this->set(compact('teachers'));
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
			foreach($this->data['EvaluationResult'] as $key => $result){
				if(empty($result['score'])){
					$score = 0;
				}else{
					$score = $result['score'];
				}
				$letterGrade = $this->LetterGrade->getLetterEquivalent($score);
				$this->data['EvaluationResult'][$key]['equivalent'] = $letterGrade['LetterGrade']['equivalent'];
			}
			$evalScore = $this->data['Evaluation']['score'];
			$evalLetterGrade = $this->LetterGrade->getLetterEquivalent($evalScore);
			$this->data['Evaluation']['equivalent'] = $evalLetterGrade['LetterGrade']['equivalent'];
			
			//pr($this->data['EvaluationResult']);exit;
			$this->Evaluation->create();
			if ($this->Evaluation->saveAll($this->data)) {
				
				$this->Session->setFlash(__('Successfully Submitted', true));
				$this->redirect(array('action' => 'success'));
			} else {
				$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
			}
		}
		
		//CHECK IF TEACHER ALREADY EVALUATED
		if(isset($this->params['named']['teacher_id']) && isset($this->params['named']['student_id'])){
			
			$result = $this->Evaluation->find('all',array('conditions'=>array(
												'Evaluation.teacher_id'=>$this->params['named']['teacher_id'],
												'Evaluation.student_id'=>$this->params['named']['student_id']
											)));
			if($result){
				$this->Session->setFlash(__('Oops! Teacher already evaluated.', true));
				$this->redirect(array('controller'=>'pages','action' => '/'));
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
		$categories = $this->Category->find('all',array('conditions'=>array('Category.for_masters'=>$teacher['Teacher']['is_master'])));
		$group_questions = array();
		$category_ids = array();

		
		//Initialize group_questions[category] 
		foreach($categories as $category){
			$cat_id =  $category['Category']['id'];
			$group_questions[$cat_id] = array();
			array_push($category_ids,$cat_id);
		}
		
		$questions = $this->Category->Question->find('all',array('conditions'=>array('Question.category_id'=>$category_ids)));
		
		//Push questions to group_questions[category]
		foreach($questions as $question){
			$cat_id =  $question['Question']['category_id'];
			array_push($group_questions[$cat_id],$question);
		}
			
		$student_id = $this->params['named']['student_id'];
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
