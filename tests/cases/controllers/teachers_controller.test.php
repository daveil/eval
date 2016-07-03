<?php
/* Teachers Test cases generated on: 2016-07-03 05:15:06 : 1467515706*/
App::import('Controller', 'Teachers');

class TestTeachersController extends TeachersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeachersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.evaluation', 'app.student', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Teachers =& new TestTeachersController();
		$this->Teachers->constructClasses();
	}

	function endTest() {
		unset($this->Teachers);
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
