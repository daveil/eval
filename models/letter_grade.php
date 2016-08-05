<?php
class LetterGrade extends AppModel {
	var $name = 'LetterGrade';

	function getLetterEquivalent($score){
		//pr($score);exit;
		$query = "
			SELECT 
				*
				FROM
				  letter_grades 
				WHERE 
					min_grade >= $score
				AND	max_grade <= $score
			";
		
		return $this->query($query);
	}
}
