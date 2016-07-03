<?php
/* Evaluation Fixture generated on: 2016-07-03 05:14:47 : 1467515687 */
class EvaluationFixture extends CakeTestFixture {
	var $name = 'Evaluation';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'student_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'teacher_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'score' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'student_id' => 1,
			'teacher_id' => 1,
			'score' => 1,
			'created' => '2016-07-03 05:14:47'
		),
	);
}
