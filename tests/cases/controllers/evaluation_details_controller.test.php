<?php
/* EvaluationDetails Test cases generated on: 2016-07-03 05:15:05 : 1467515705*/
App::import('Controller', 'EvaluationDetails');

class TestEvaluationDetailsController extends EvaluationDetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EvaluationDetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation_detail', 'app.evaluation', 'app.student', 'app.teacher', 'app.evaluation_result', 'app.category', 'app.question');

	function startTest() {
		$this->EvaluationDetails =& new TestEvaluationDetailsController();
		$this->EvaluationDetails->constructClasses();
	}

	function endTest() {
		unset($this->EvaluationDetails);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
