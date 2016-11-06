<?php
/* Sections Test cases generated on: 2016-11-06 07:30:08 : 1478388608*/
App::import('Controller', 'Sections');

class TestSectionsController extends SectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SectionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.student', 'app.evaluation', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Sections =& new TestSectionsController();
		$this->Sections->constructClasses();
	}

	function endTest() {
		unset($this->Sections);
		ClassRegistry::flush();
	}

}
