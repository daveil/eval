<div class="schedules view">
<h2><?php  __('Schedule');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schedule['Schedule']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Section'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($schedule['Section']['name'], array('controller' => 'sections', 'action' => 'view', $schedule['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schedule['Schedule']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Sched'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schedule['Schedule']['start_sched']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Sched'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schedule['Schedule']['end_sched']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schedule['Schedule']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $schedule['Schedule']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule', true), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Schedule', true), array('action' => 'delete', $schedule['Schedule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
