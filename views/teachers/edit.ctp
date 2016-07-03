<div class="teachers form">
<?php echo $this->Form->create('Teacher');?>
	<fieldset>
		<legend><?php __('Edit Teacher'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Teacher.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Teacher.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>