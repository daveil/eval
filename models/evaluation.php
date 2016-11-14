<?php
class Evaluation extends AppModel {
	var $name = 'Evaluation';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Teacher' => array(
			'className' => 'Teacher',
			'foreignKey' => 'teacher_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'EvaluationDetail' => array(
			'className' => 'EvaluationDetail',
			'foreignKey' => 'evaluation_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EvaluationResult' => array(
			'className' => 'EvaluationResult',
			'foreignKey' => 'evaluation_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	function getAverageResult($teacher_id){
		$query = "
					SELECT
						`Teacher`.`last_name`
						, `Teacher`.`first_name`
						, `Teacher`.`middle_name`
						, `Teacher`.`gender`
						, ROUND( AVG(`evaluations`.`score`),2) AS average_score
						, ROUND(AVG(`evaluation_results`.`score`),2) AS average_result
						, `evaluation_results`.`category_id` AS category_id
						, Category.name
						, Category.precentage
					FROM
					   `teachers` as Teacher
						LEFT JOIN `evaluations` 
							ON (`Teacher`.`id` = `evaluations`.`teacher_id`)
						LEFT JOIN `evaluation_results` 
							ON (`evaluations`.`id` = `evaluation_results`.`evaluation_id`)
						LEFT JOIN `categories` as Category 
							ON (`evaluation_results`.`category_id` = `Category`.`id`)
					WHERE `Teacher`.id = $teacher_id
					GROUP BY  evaluation_results.category_id
				";
		
		return $this->query($query);
	}
}
