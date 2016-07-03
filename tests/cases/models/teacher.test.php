<?php
/* Teacher Test cases generated on: 2016-07-03 05:14:48 : 1467515688*/
App::import('Model', 'Teacher');

class TeacherTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.evaluation', 'app.student', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Teacher =& ClassRegistry::init('Teacher');
	}

	function endTest() {
		unset($this->Teacher);
		ClassRegistry::flush();
	}

}
