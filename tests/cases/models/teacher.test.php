<?php
/* Teacher Test cases generated on: 2016-11-06 07:31:36 : 1478388696*/
App::import('Model', 'Teacher');

class TeacherTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.section', 'app.student', 'app.evaluation', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Teacher =& ClassRegistry::init('Teacher');
	}

	function endTest() {
		unset($this->Teacher);
		ClassRegistry::flush();
	}

}
