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
		/*
		$query = "	
					SELECT
						`Teacher`.`last_name`
						, `Teacher`.`first_name`
						, `Teacher`.`middle_name`
						, `Teacher`.`gender`
						,ROUND( AVG(`evaluations`.`score`),2) AS average_score
						, ROUND(AVG(`evaluation_results`.`score`),2) AS average_result
						, Category.name
					FROM
					   `teachers` as Teacher
						LEFT JOIN `evaluations` 
							ON (`Teacher`.`id` = `evaluations`.`teacher_id`)
						LEFT JOIN `evaluation_results` 
							ON (`evaluations`.`id` = `evaluation_results`.`evaluation_id`)
						LEFT JOIN `categories` as Category 
							ON (`evaluation_results`.`category_id` = `Category`.`id`)
					WHERE `Teacher`.id = $teacher_id
					GROUP BY evaluations.`teacher_id`, evaluation_results.category_id
				";
		*/
		
		$query =  "
			SELECT 
			  `Teacher`.`last_name`,
			  `Teacher`.`first_name`,
			  `Teacher`.`middle_name`,
			  `Teacher`.`gender`,
			  ROUND(AVG(`evaluations`.`score`), 2) AS average_score,
			  ROUND(AVG(`evaluation_results`.`score`),2) AS average_result,
			  CASE
				WHEN   ROUND(AVG(`evaluation_results`.`score`),2)  >= 8.6 THEN 'O'
				WHEN   ROUND(AVG(`evaluation_results`.`score`),2)  >= 6.6 AND ROUND(AVG(`evaluation_results`.`score`),2)  <=  8.59 THEN 'VS'
				WHEN   ROUND(AVG(`evaluation_results`.`score`),2) >= 4.6 AND ROUND(AVG(`evaluation_results`.`score`),2)  <= 6.59 THEN 'S'
				WHEN   ROUND(AVG(`evaluation_results`.`score`),2) >= 2.6 AND ROUND(AVG(`evaluation_results`.`score`),2)  <= 4.59 THEN 'U'
				ELSE 'P'
			  END AS letter_grade,
			  Category.name 
			FROM
			  `teachers` AS Teacher 
			  LEFT JOIN `evaluations` 
				ON (
				  `Teacher`.`id` = `evaluations`.`teacher_id`
				) 
			  LEFT JOIN `evaluation_results` 
				ON (
				  `evaluations`.`id` = `evaluation_results`.`evaluation_id`
				) 
			  LEFT JOIN `categories` AS Category 
				ON (
				  `evaluation_results`.`category_id` = `Category`.`id`
				) 
			WHERE `Teacher`.id = 3 
			GROUP BY evaluations.`teacher_id`,
			  evaluation_results.category_id 
		";
		
		return $this->query($query);
	}
}
