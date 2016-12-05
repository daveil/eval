<?php
/* Lrns Test cases generated on: 2016-12-05 20:32:57 : 1480941177*/
App::import('Controller', 'Lrns');

class TestLrnsController extends LrnsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LrnsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lrn');

	function startTest() {
		$this->Lrns =& new TestLrnsController();
		$this->Lrns->constructClasses();
	}

	function endTest() {
		unset($this->Lrns);
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
