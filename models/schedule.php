<?php
class Schedule extends AppModel {
	var $name = 'Schedule';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	function isAvailable($section_id){
		$filter_time = array();
		$filter_time['Schedule.status']='active';
		$filter_time['Schedule.section_id']=$section_id;
		$filter_time['Schedule.start_sched <=']=date('Y-m-d H:i:s',time());
		$filter_time['Schedule.end_sched >=']=date('Y-m-d H:i:s',time());
		$sched = $this->find('count',array('conditions'=>$filter_time));
		return $sched;
	}
}
