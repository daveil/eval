<?php
class EvaluationResult extends AppModel {
	var $name = 'EvaluationResult';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Evaluation' => array(
			'className' => 'Evaluation',
			'foreignKey' => 'evaluation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
