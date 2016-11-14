<style type="text/css"> 
table tr th {text-align:center;}
table tr td:not(:first-child) {text-align:center;}
</style>
<h2><?php __('Evaluation Results');?></h2>
<?php
echo $this->Form->create('Evaluation',array('action'=>'summary_report','target'=>'_blank'));			
echo $this->Form->submit('Print');
echo $this->Form->end();
?>
<table>
	<thead>
		<tr>
			<th rowspan="2">Faculty Name</th>
			<th colspan="<?php echo count($categories);?>">Score per Catgories</th>
			<th rowspan="2">Average</th>
			<th rowspan="2">Letter Grade</th>
		</tr>
		<tr>
			<?php foreach($categories as $category):?>
				<th><?php echo $category;?></th>
			<?php endforeach;?>
		</tr>
	</thead>
	<tbody>
		<?php foreach($evaluations as $e):
			$teacher = $e[0]['Teacher'];
		?>
		<tr> 
			<td><?php echo $teacher['first_name'].' '.$teacher['middle_name'].' '.$teacher['last_name']?></td>
			<?php foreach($e as $eval):?>
				<?php foreach($categories as $id=>$cat):?>
					<?php if($eval['evaluation_results']['category_id']==$id):?>
							<td><?php echo($eval['0']['average_result']);?></td>
					<?php endif;?>
				<?php endforeach;?>
			<?php endforeach;?>
			<?php if(count($e)<=1):?>
				<?php foreach($categories as $id=>$cat):?>
					<td>N/A</td>
				<?php endforeach;?>
				<td>N/A</td>
				<td>N/A</td>
			<?php 
				else:
					$average = $e[0]['0']['average_score'];
					$letter = $e[0]['0']['letter_score']['LetterGrade']['equivalent'];
			?>
				<td><?php echo $average;?></td>
				<td><?php echo $letter;?></td>
			<?php endif;?>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>