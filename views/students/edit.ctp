<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
		<legend><?php __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('User.first_name');
		echo $this->Form->input('User.last_name');
		echo $this->Form->input('User.middle_name');
		echo $this->Form->input('age');
		echo $this->Form->input('section_id');
		echo $this->Form->input('gender',array('options'=>array('m'=>'Male','f'=>'Female'),'empty'=>'Select one'));
	?>'
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Student.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>