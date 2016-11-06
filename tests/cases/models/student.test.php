<?php
/* Student Test cases generated on: 2016-11-06 07:39:04 : 1478389144*/
App::import('Model', 'Student');

class StudentTestCase extends CakeTestCase {
	var $fixtures = array('app.student', 'app.user', 'app.section', 'app.teacher', 'app.evaluation', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Student =& ClassRegistry::init('Student');
	}

	function endTest() {
		unset($this->Student);
		ClassRegistry::flush();
	}

}
