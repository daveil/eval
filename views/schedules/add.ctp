<div class="schedules form">
<?php echo $this->Form->create('Schedule');?>
	<fieldset style="margin-top: -140px;">
		<legend><?php __('Add Schedule'); ?></legend>
	<?php
		echo $this->Form->input('section_id');
		echo $this->Form->input('start_sched');
		echo $this->Form->input('end_sched');
		echo $this->Form->input('status',array('empty'=>'Select one','options'=>array('active'=>'Active','inactive'=>'Inactive')));
	?>
	</fieldset>
	<div class="submit">
	  <input type="submit" value="Submit" style="margin-left: -147px;">
	

	<!--
	<?php //echo $this->Form->end(__('Submit', true));?>
    -->
	</div>
<div class="actions" style="margin-left: -187px;margin-top: 28px;">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schedules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>