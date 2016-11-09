<div class="schedules form">
<?php echo $this->Form->create('Schedule');?>
	<fieldset style="margin-top: -145px;margin-right: -350px;">
		<legend><?php __('Edit Schedule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('start_sched');
		echo $this->Form->input('end_sched');
		echo $this->Form->input('status',array('empty'=>'Select one','options'=>array('active'=>'Active','inactive'=>'Inactive')));
	?>
	</fieldset>
	<div class="submit">
		<input type="submit" value="Submit" style="margin-left: 348px; margin-top: -79px;">
	<!--<?php echo $this->Form->end(__('Submit', true));?>
	-->
</div>
<div class="actions" style="margin-top: 21px;margin-left: -185px;">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Schedule.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Schedule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>