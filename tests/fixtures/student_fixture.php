<?php
/* Student Fixture generated on: 2016-11-06 07:39:04 : 1478389144 */
class StudentFixture extends CakeTestFixture {
	var $name = 'Student';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'slug' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'age' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'gender' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'slug' => 'Lorem ipsum dolor sit amet',
			'age' => 1,
			'section_id' => 1,
			'gender' => 'Lorem ipsum dolor sit ame',
			'created' => '2016-11-06 07:39:04',
			'modified' => '2016-11-06 07:39:04'
		),
	);
}
