<?php
class LetterGrade extends AppModel {
	var $name = 'LetterGrade';

	function getLetterEquivalent($score){
		$conditions = array(
						'LetterGrade.min_grade >=' =>$score,
						'LetterGrade.max_grade <=' =>$score
						);
		return $this->find('first',compact('conditions'));
	}
}
