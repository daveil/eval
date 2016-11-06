<div class="schedules form">
<?php echo $this->Form->create('Schedule');?>
	<fieldset>
		<legend><?php __('Add Schedule'); ?></legend>
	<?php
		echo $this->Form->input('section_id');
		echo $this->Form->input('start_sched');
		echo $this->Form->input('end_sched');
		echo $this->Form->input('status',array('empty'=>'Select one','options'=>array('active'=>'Active','inactive'=>'Inactive')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schedules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>