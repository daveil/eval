<?php
/* Section Test cases generated on: 2016-11-06 08:26:14 : 1478391974*/
App::import('Model', 'Section');

class SectionTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.schedule', 'app.student', 'app.user', 'app.evaluation', 'app.teacher', 'app.evaluation_detail', 'app.question', 'app.category', 'app.evaluation_result');

	function startTest() {
		$this->Section =& ClassRegistry::init('Section');
	}

	function endTest() {
		unset($this->Section);
		ClassRegistry::flush();
	}

}
