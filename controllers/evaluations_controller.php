<?php
class EvaluationsController extends AppController {

	var $name = 'Evaluations';
	var $uses = array('Evaluation','Category','LetterGrade','Student','Schedule');
	
	function index() {
		if (!empty($this->data)) {
			//$this->Evaluation->recursive =2;
			//$evaluation = $this->Evaluation->findByTeacherId($this->data['Evaluation']['teacher_id']);
			if ($this->data['Evaluation']['teacher_id']){
				$evaluation = $this->data;
				$results = $this->Evaluation->getAverageResult($this->data['Evaluation']['teacher_id']);
				if(!empty($evaluation)){
					foreach($results as $k => $r){
						$results[$k]['0']['letter_score'] = $this->LetterGrade->getLetterEquivalent($results[$k]['0']['average_score']);
						if($results[$k]['Category']['precentage']){
							$perCatPercentage = ($results[$k]['0']['average_result']/($results[$k]['Category']['precentage']/10))*10;
							$results[$k]['0']['letter_result'] = $this->LetterGrade->getLetterEquivalent($perCatPercentage);	
						}
						//pr($results[$k]['0']['average_result'].'/'.($results[$k]['Category']['precentage']/10).'='.($results[$k]['0']['average_result']/($results[$k]['Category']['precentage']/10))*10);
						
					}
					//pr($results);exit;
					
					$this->set(compact('evaluation','results'));
				}
			}else{
				$this->Session->setFlash('Select teacher');
				$this->redirect(array('action'=>'index'));
			}
		}
		$student = $this->Student->findByUserId($_SESSION['Auth']['User']['id']);
		$filter_teacher = array('Teacher.section_id'=>$student['Student']['section_id']);
		if($_SESSION['Auth']['User']['is_admin'])
			$filter_teacher = array();
		$teachers = $this->Evaluation->Teacher->find('list',array('conditions'=>$filter_teacher));
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
		$select = false;
		$teacher_id  = $student_id =null;
		$student = $this->Student->findByUserId($_SESSION['Auth']['User']['id']);
		$filter_teacher = array('Teacher.section_id'=>$student['Student']['section_id']);
		if (!empty($this->data)) {
			if(!isset($this->data['Evaluation']['select'])){
				$this->Evaluation->create();
				if ($this->Evaluation->saveAll($this->data)) {
					
					$this->Session->setFlash(__('Successfully Submitted', true));
					$this->redirect(array('action' => 'success'));
				} else {
					$this->Session->setFlash(__('The evaluation could not be saved. Please, try again.', true));
				}
			}else{
				$teacher_id = $this->data['Evaluation']['teacher_id'];
				$student_id = $student['Student']['id'];
			}
		}
		
		//Evaluation validation
		if($teacher_id&&$student_id){
			
			
			$isAvailable =  $this->Schedule->isAvailable($student['Student']['section_id']);
			if(!$isAvailable){
				//$this->Session->setFlash(__('Oops! Teacher already evaluated.', true));
				$this->redirect(array('controller'=>'evaluations','action' => 'add?select=notime'));
			}
			//CHECK IF TEACHER ALREADY EVALUATED
			$result = $this->Evaluation->find('all',array(
											'recursive'=>-1,
											'conditions'=>array(
												'Evaluation.teacher_id'=>$teacher_id,
												'Evaluation.student_id'=>$student_id
											)));
			if($result){
				//$this->Session->setFlash(__('Oops! Teacher already evaluated.', true));
				$this->redirect(array('controller'=>'evaluations','action' => 'add?select=evaluated'));
			}
		}else{
			if(!isset($_GET['select'])){
				$this->Session->setFlash(__('Oops! No selected teacher.', true));
				$this->redirect(array('controller'=>'pages','action' => '/'));
			}else{
				$teachers = $this->Evaluation->Teacher->find('list',array('conditions'=>$filter_teacher));
				$select = true;
				$this->set(compact('teachers','select'));
				
			}
		}
			
		if(!$select){
			if($teacher_id){
				$teacher = $this->Evaluation->Teacher->findById($teacher_id);
				$teacher_name = $teacher['Teacher']['full_name'];
				$this->set(compact('teacher_id','student_id', 'teacher','teacher_name'));
			}
			
			
			$students = array();//$this->Evaluation->Student->find('list');
			$teachers = $this->Evaluation->Teacher->find('list',array('conditions'=>$filter_teacher));
			//$categories = $this->Category->find('all',array('conditions'=>array('Category.for_masters'=>$teacher['Teacher']['is_master'])));
			$categories = $this->Category->find('all');
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
				
			$this->set(compact('students', 'teachers','categories','group_questions','student_id'));
		}
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
	function report(){
		$user = $this->Auth->user();
		if (empty($this->data)||!$user['User']['is_admin']) {
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Evaluation->recursive =2;
			$evaluation = $this->Evaluation->findByTeacherId($this->data['Evaluation']['teacher_id']);
			$results = $this->Evaluation->getAverageResult($this->data['Evaluation']['teacher_id']);
			$this->set(compact('evaluation','results'));
		}
	}
	function summary(){
		$teachers  =  $this->Teacher->find('list');
		$evaluations = array();
		foreach($teachers as $teacher_id=>$name){
			$results = $this->Evaluation->getAverageResult($teacher_id);
			foreach($results as $k => $r){
				$results[$k]['0']['letter_score'] = $this->LetterGrade->getLetterEquivalent($results[$k]['0']['average_score']);
				if($results[$k]['Category']['precentage']){
					$perCatPercentage = ($results[$k]['0']['average_result']/($results[$k]['Category']['precentage']/10))*10;
					$results[$k]['0']['letter_result'] = $this->LetterGrade->getLetterEquivalent($perCatPercentage);	
				}
				//pr($results[$k]['0']['average_result'].'/'.($results[$k]['Category']['precentage']/10).'='.($results[$k]['0']['average_result']/($results[$k]['Category']['precentage']/10))*10);
				
			}
			array_push($evaluations,$results);
		}
		$categories =  $this->Category->find('list',array('fields'=>array('id','code')));
		$this->set(compact('evaluations','categories'));
	}
	function summary_report(){
		$this->summary();
	}
}
