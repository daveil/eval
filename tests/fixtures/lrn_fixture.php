<?php
/* Lrn Fixture generated on: 2016-12-05 20:32:25 : 1480941145 */
class LrnFixture extends CakeTestFixture {
	var $name = 'Lrn';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'lrn' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'encoded_by' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'lrn' => 'Lorem ipsum d',
			'encoded_by' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-12-05 20:32:25',
			'modified' => '2016-12-05 20:32:25'
		),
	);
}
