<?php
/* Students Test cases generated on: 2016-07-03 05:15:06 : 1467515706*/
App::import('Controller', 'Students');

class TestStudentsController extends StudentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StudentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.student', 'app.evaluation', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Students =& new TestStudentsController();
		$this->Students->constructClasses();
	}

	function endTest() {
		unset($this->Students);
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
