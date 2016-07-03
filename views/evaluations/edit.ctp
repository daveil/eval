<div class="evaluations form">
<?php echo $this->Form->create('Evaluation');?>
	<fieldset>
		<legend><?php __('Edit Evaluation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('score');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Evaluation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Evaluation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Details', true), array('controller' => 'evaluation_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Detail', true), array('controller' => 'evaluation_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Results', true), array('controller' => 'evaluation_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Result', true), array('controller' => 'evaluation_results', 'action' => 'add')); ?> </li>
	</ul>
</div>