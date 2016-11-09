<div class="evaluationResults form">
<?php echo $this->Form->create('EvaluationResult');?>
	<fieldset eval style="margin-top: -137px;">
		<legend><?php __('Add Evaluation Result'); ?></legend>
	<?php
		echo $this->Form->input('evaluation_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('total');
		echo $this->Form->input('score');
		echo $this->Form->input('equivalent');
	?>
	</fieldset eval>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evaluation Results', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>