<?php
/* Question Test cases generated on: 2016-07-03 05:14:47 : 1467515687*/
App::import('Model', 'Question');

class QuestionTestCase extends CakeTestCase {
	var $fixtures = array('app.question', 'app.category', 'app.evaluation_result', 'app.evaluation', 'app.student', 'app.teacher', 'app.evaluation_detail');

	function startTest() {
		$this->Question =& ClassRegistry::init('Question');
	}

	function endTest() {
		unset($this->Question);
		ClassRegistry::flush();
	}

}
