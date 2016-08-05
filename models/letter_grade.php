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
				WHERE max_grade >= $score
				ORDER BY id DESC
				LIMIT 1

		";
		
		return $this->query($query);
	}
}
