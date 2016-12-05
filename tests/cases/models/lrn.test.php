<?php
/* Lrn Test cases generated on: 2016-12-05 20:32:25 : 1480941145*/
App::import('Model', 'Lrn');

class LrnTestCase extends CakeTestCase {
	var $fixtures = array('app.lrn');

	function startTest() {
		$this->Lrn =& ClassRegistry::init('Lrn');
	}

	function endTest() {
		unset($this->Lrn);
		ClassRegistry::flush();
	}

}
