<?php
/* EvaluationDetail Fixture generated on: 2016-07-03 05:14:46 : 1467515686 */
class EvaluationDetailFixture extends CakeTestFixture {
	var $name = 'EvaluationDetail';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'evaluation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'question_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'score' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'evaluation_id' => 1,
			'question_id' => 1,
			'score' => 1
		),
	);
}
