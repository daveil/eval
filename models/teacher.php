<?php
class Teacher extends AppModel {
	var $name = 'Teacher';
	var $virtualFields= array('full_name'=>'CONCAT(Teacher.first_name," ",Teacher.last_name)');
	var $displayField ='full_name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Evaluation' => array(
			'className' => 'Evaluation',
			'foreignKey' => 'teacher_id',
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

}
