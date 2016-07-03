<?php
/* EvaluationDetail Test cases generated on: 2016-07-03 05:14:46 : 1467515686*/
App::import('Model', 'EvaluationDetail');

class EvaluationDetailTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation_detail', 'app.evaluation', 'app.question');

	function startTest() {
		$this->EvaluationDetail =& ClassRegistry::init('EvaluationDetail');
	}

	function endTest() {
		unset($this->EvaluationDetail);
		ClassRegistry::flush();
	}

}
