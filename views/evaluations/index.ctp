<style type="text/css">
	.column{
		display:inline-block;
		width:35%;
	}
	#Form{
		width:20%
	}
</style>
<div>
	<h2><?php __('Evaluation Results');?></h2>
	<div id="Form" class="column">
	<?php
		echo $this->Form->create('Evaluation');
		echo $this->Form->input('teacher_id');
		echo $this->Form->submit('View');
		echo $this->Form->end();
	?>
	</div>
	<?php 
		if(isset($evaluation)):
			$teacher = $evaluation['Teacher'];
	?>
	<div id="Teacher" class="column"> 
		<dl><?php $i = 0; $class = ' class="altrow"';?>
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
		<?php if (!empty($evaluation['EvaluationResult'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Category'); ?></th>
		<th><?php __('Score'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evaluation['EvaluationResult'] as $evaluationResult):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $evaluationResult['Category']['name'];?></td>
			<td><?php echo $evaluationResult['score'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	</div>
	<?php
	endif;
	?>
</div>
