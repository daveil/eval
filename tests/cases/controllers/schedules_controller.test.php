<?php
/* Schedules Test cases generated on: 2016-11-06 08:27:17 : 1478392037*/
App::import('Controller', 'Schedules');

class TestSchedulesController extends SchedulesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SchedulesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.schedule', 'app.section', 'app.student', 'app.user', 'app.evaluation', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Schedules =& new TestSchedulesController();
		$this->Schedules->constructClasses();
	}

	function endTest() {
		unset($this->Schedules);
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
