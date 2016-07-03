<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
		<legend><?php __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('age');
		echo $this->Form->input('section');
		echo $this->Form->input('gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>