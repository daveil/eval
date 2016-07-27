<h2><?php __('Evaluation Results');?></h2>
<div class="three-columns">
	<div id="Form" class="column">
	<?php
		echo $this->Form->create('Evaluation');
		echo $this->Form->input('teacher_id');
		echo $this->Form->submit('View');
		echo $this->Form->end();
	?>
	</div>
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

	</div>
	<div id="Results" class="column">
		<h3>Results</h3>

		<?php 
		if (!empty($results[0])):?>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt>Average</dt>
		<dd><?php echo $results[0]['0']['average_score']; ?></dd>
		</dl>
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
</div>
