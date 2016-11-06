<?php
/* Schedule Test cases generated on: 2016-11-06 08:26:07 : 1478391967*/
App::import('Model', 'Schedule');

class ScheduleTestCase extends CakeTestCase {
	var $fixtures = array('app.schedule', 'app.section', 'app.student', 'app.user', 'app.evaluation', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Schedule =& ClassRegistry::init('Schedule');
	}

	function endTest() {
		unset($this->Schedule);
		ClassRegistry::flush();
	}

}
