<?php
/* Student Test cases generated on: 2016-07-03 05:14:48 : 1467515688*/
App::import('Model', 'Student');

class StudentTestCase extends CakeTestCase {
	var $fixtures = array('app.student', 'app.evaluation', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Student =& ClassRegistry::init('Student');
	}

	function endTest() {
		unset($this->Student);
		ClassRegistry::flush();
	}

}
