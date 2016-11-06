<?php
/* Schedule Fixture generated on: 2016-11-06 08:26:07 : 1478391967 */
class ScheduleFixture extends CakeTestFixture {
	var $name = 'Schedule';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_sched' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'end_sched' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'section_id' => 1,
			'status' => 'Lorem ip',
			'start_sched' => '2016-11-06 08:26:07',
			'end_sched' => '2016-11-06 08:26:07',
			'created' => '2016-11-06 08:26:07',
			'modified' => '2016-11-06 08:26:07'
		),
	);
}
