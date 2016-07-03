<?php
/* Category Test cases generated on: 2016-07-03 05:14:46 : 1467515686*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category', 'app.evaluation_result', 'app.question');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
