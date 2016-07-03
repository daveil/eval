<?php
/* EvaluationResult Test cases generated on: 2016-07-03 05:14:47 : 1467515687*/
App::import('Model', 'EvaluationResult');

class EvaluationResultTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation_result', 'app.evaluation', 'app.category', 'app.question');

	function startTest() {
		$this->EvaluationResult =& ClassRegistry::init('EvaluationResult');
	}

	function endTest() {
		unset($this->EvaluationResult);
		ClassRegistry::flush();
	}

}
