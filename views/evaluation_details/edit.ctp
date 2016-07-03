<div class="evaluationDetails form">
<?php echo $this->Form->create('EvaluationDetail');?>
	<fieldset>
		<legend><?php __('Edit Evaluation Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evaluation_id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('score');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EvaluationDetail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EvaluationDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluation Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>