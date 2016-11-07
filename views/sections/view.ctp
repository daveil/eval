<div class="sections view">
<h2><?php  __('Section');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Section', true), array('action' => 'edit', $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Section', true), array('action' => 'delete', $section['Section']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $section['Section']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('action' => 'add')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('List Schedules', true), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule', true), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		-->
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Schedules');?></h3>
	<?php if (!empty($section['Schedule'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Start Sched'); ?></th>
		<th><?php __('End Sched'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['Schedule'] as $schedule):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $schedule['id'];?></td>
			<td><?php echo $schedule['section_id'];?></td>
			<td><?php echo $schedule['status'];?></td>
			<td><?php echo $schedule['start_sched'];?></td>
			<td><?php echo $schedule['end_sched'];?></td>
			<td><?php echo $schedule['created'];?></td>
			<td><?php echo $schedule['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'schedules', 'action' => 'view', $schedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'schedules', 'action' => 'edit', $schedule['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'schedules', 'action' => 'delete', $schedule['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $schedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Schedule', true), array('controller' => 'schedules', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Students');?></h3>
	<?php if (!empty($section['Student'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Slug'); ?></th>
		<th><?php __('Age'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['Student'] as $student):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $student['id'];?></td>
			<td><?php echo $student['user_id'];?></td>
			<td><?php echo $student['slug'];?></td>
			<td><?php echo $student['age'];?></td>
			<td><?php echo $student['section_id'];?></td>
			<td><?php echo $student['gender'];?></td>
			<td><?php echo $student['created'];?></td>
			<td><?php echo $student['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'students', 'action' => 'delete', $student['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teachers');?></h3>
	<?php if (!empty($section['Teacher'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Middle Name'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Is Master'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['Teacher'] as $teacher):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teacher['id'];?></td>
			<td><?php echo $teacher['last_name'];?></td>
			<td><?php echo $teacher['first_name'];?></td>
			<td><?php echo $teacher['middle_name'];?></td>
			<td><?php echo $teacher['gender'];?></td>
			<td><?php echo $teacher['section_id'];?></td>
			<td><?php echo $teacher['is_master'];?></td>
			<td><?php echo $teacher['created'];?></td>
			<td><?php echo $teacher['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'teachers', 'action' => 'view', $teacher['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'teachers', 'action' => 'edit', $teacher['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'teachers', 'action' => 'delete', $teacher['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
