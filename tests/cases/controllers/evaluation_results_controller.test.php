<?php
/* EvaluationResults Test cases generated on: 2016-07-03 05:15:05 : 1467515705*/
App::import('Controller', 'EvaluationResults');

class TestEvaluationResultsController extends EvaluationResultsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EvaluationResultsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation_result', 'app.evaluation', 'app.student', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category');

	function startTest() {
		$this->EvaluationResults =& new TestEvaluationResultsController();
		$this->EvaluationResults->constructClasses();
	}

	function endTest() {
		unset($this->EvaluationResults);
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
