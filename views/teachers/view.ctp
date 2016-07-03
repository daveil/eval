<div class="teachers view">
<h2><?php  __('Teacher');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middle Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['middle_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacher['Teacher']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Teacher', true), array('action' => 'edit', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Teacher', true), array('action' => 'delete', $teacher['Teacher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Evaluations');?></h3>
	<?php if (!empty($teacher['Evaluation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Student Id'); ?></th>
		<th><?php __('Teacher Id'); ?></th>
		<th><?php __('Score'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($teacher['Evaluation'] as $evaluation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $evaluation['id'];?></td>
			<td><?php echo $evaluation['student_id'];?></td>
			<td><?php echo $evaluation['teacher_id'];?></td>
			<td><?php echo $evaluation['score'];?></td>
			<td><?php echo $evaluation['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'evaluations', 'action' => 'view', $evaluation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'evaluations', 'action' => 'edit', $evaluation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'evaluations', 'action' => 'delete', $evaluation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
