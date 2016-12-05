<?php 
		if(isset($results[0])):
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
			<?php echo $teacher['gender']; ?>
			&nbsp;
		</dd>
	</dl>
	<h3>Students</h3>
		<table>
				<tr>
					<th>Student</th>
					<th>Score</th>
					<th>Letter Grade</th>
				</tr>
		<?php if (count($evals)):?>
			
				<?php foreach($evals as $eval):?>
					<tr>
						<td><?php echo $eval['Student']['lrn'];?></td>
						<td><?php echo $eval['Evaluation']['score'];?></td>
						<td><?php echo $eval['Evaluation']['letter']['description'];?></td>
					</tr>
				<?php endforeach;?>
		<?php else:?>
				<tr>
						<td colspan="3" style="text-align:center;font-size:1.5rem;"><h4>No Evaluation Yet</h4></td>
				</tr>
		<?php endif;?>
				
			</table>
	</div>
	<div id="Results" class="column">
		<h3>Results</h3>

		<?php 
		if (!empty($results[0])):
		if(!empty($results[0]['Category']['name'])):
		?>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt>Average</dt>
		<dd><?php echo $results[0]['0']['average_score']; ?></dd>
		</dl>
		<?php endif;?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Category'); ?></th>
		<th><?php __('Score'); ?></th>
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
		</tr>
	<?php endforeach;?>
	<?php else: ?>
		<tr<?php echo $class;?>>
			<td colspan="2">No Evaluation Yet</td>
		</tr>
	
	<?php endif;?>
	
	</table>
<?php endif; ?>

	</div>
	<?php
	endif;
	?>
	<script type="text/javascript">window.print();</script>