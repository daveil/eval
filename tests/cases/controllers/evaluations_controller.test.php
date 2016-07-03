<?php
/* Evaluations Test cases generated on: 2016-07-03 05:15:05 : 1467515705*/
App::import('Controller', 'Evaluations');

class TestEvaluationsController extends EvaluationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EvaluationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation', 'app.student', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Evaluations =& new TestEvaluationsController();
		$this->Evaluations->constructClasses();
	}

	function endTest() {
		unset($this->Evaluations);
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
