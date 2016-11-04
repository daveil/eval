<?php
class Student extends AppModel {
	var $name = 'Student';
	var $virtualFields= array('full_name'=>'CONCAT(Student.first_name," ",Student.last_name)');
	var $displayField ='full_name';
	

	var $hasMany = array(
		'Evaluation' => array(
			'className' => 'Evaluation',
			'foreignKey' => 'student_id',
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
