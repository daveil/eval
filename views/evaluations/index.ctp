<style type="text/css">
#EvaluationReportForm, #EvaluationReportForm .submit{padding:0;margin:0;}
</style>
<h2><?php __('Evaluation Results');?></h2>
<div class="three-columns">
	<div id="Form" class="column">
	  <form action="/eval/evaluations" id="EvaluationIndexForm" method="post" accept-charset="utf-8" style="margin-left: -180px;margin-top: -35px;">
	<?php
		echo $this->Form->create('Evaluation');
		echo $this->Form->input('teacher_id',array('empty'=>'Select one'));
		echo $this->Form->submit('View');
		echo $this->Form->end();
	?>
	</div>
	<?php 
		if(!isset($results[0])):
		
	?>
		<?php if(count($_POST)):?>
		<h2>No evaluation yet for <i><?php echo $teachers[$_POST['data']['Evaluation']['teacher_id']];?></i>.</h2>
		<?php else: ?>
		<h2>Select teacher and click <b>View</b>.</h2>
		<?php endif;?>
	<?php	else:
			$teacher = $results[0]['Teacher'];
	?>
	<div id="Teacher" class="column"> 
		<h3>Teacher</h3>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt>&nbsp;</dt>
		<dd>&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middle Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['middle_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo strtoupper($teacher['gender']); ?>
			&nbsp;
		</dd>
	</dl>

	</div>
	<div id="Results" class="column">
		<h3>Results</h3>
		<?php if (!empty($results[0])):?>
		<?php if($results[0]['0']['average_score']):?>
		<table>
			<tr>
				<td><b>Average</b></td>
				<td><b><?php echo $results[0]['0']['average_score'];?></b></td>
				<td><b><?php echo $results[0]['0']['letter_score']['LetterGrade']['equivalent'];?></b></td>
				<td>
					<?php
						if(!empty($results[0]['Category']['name'])&&$user['User']['is_admin']):
							echo $this->Form->create('Evaluation',array('action'=>'report','target'=>'_blank'));
							echo $this->Form->input('teacher_id',array('type'=>'hidden','id'=>'TeacherIdPrint'));
							echo $this->Form->submit('Print');
							echo $this->Form->end();
						endif;
					?>
				</td>
			</tr>
		</table>
		
		<?php endif;?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php __('Category'); ?></th>
				<th><?php __('Score'); ?></th>
				<th class="hide"><center><?php __('Letter Grade'); ?></center></th>
			</tr>
			<?php
				$i = 0;
				if (!empty($results[0]['Category']['name'])):
				foreach ($results as $evaluationResult):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr<?php echo $class;?>>
					<td><?php echo $evaluationResult['Category']['name'];?></td>
					<td><?php echo $evaluationResult['0']['average_result'];?></td>
					<td class="hide"><center><?php echo $results[0]['0']['letter_result']['LetterGrade']['equivalent'];?></center></td>
				</tr>
			<?php endforeach;?>
			<?php else: ?>
				<tr<?php echo $class;?>>
					<td colspan="2" style="text-align:center;font-size:1.5rem;"><h4>No Evaluation Yet</h4></td>
				</tr>
		
		<?php endif;?>
		
		</table>
		<table >
			<caption><h3>Letter Grade Equivalent</h3></caption>
			<thead>
				<th>Letter Grade</th>
				<th>Equivalent Score</th>
			</thead>
			<tbody>
				<tr>
					<td>O - Outstanding</td>
					<td>8.60 - 10.00 </td>
				</tr>
				<tr>
					<td>VS - Very Satisfactory</td>
					<td>6.60 - 8.59</td>
				</tr>
				<tr>
					<td>S - Satisfactory</td>
					<td>4.60 - 6.59</td>
				</tr>
				<tr>
					<td>U - Unsatisfactory</td>
					<td>2.60 - 4.59</td>
				</tr>
				<tr>
					<td>P - Poor</td>
					<td>2.59 & below</td>
				</tr>
			</tbody>
		</table>
		<?php endif; ?>
	
	</div>
		
	
	<?php endif;?>

</div>
	

