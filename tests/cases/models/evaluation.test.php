<?php
/* Evaluation Test cases generated on: 2016-07-03 05:14:47 : 1467515687*/
App::import('Model', 'Evaluation');

class EvaluationTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation', 'app.student', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.evaluation_result', 'app.category');

	function startTest() {
		$this->Evaluation =& ClassRegistry::init('Evaluation');
	}

	function endTest() {
		unset($this->Evaluation);
		ClassRegistry::flush();
	}

}
