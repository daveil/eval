<div class="letterGrades view">
<h2><?php  __('Letter Grade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letterGrade['LetterGrade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Min Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letterGrade['LetterGrade']['min_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Max Grade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letterGrade['LetterGrade']['max_grade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equivalent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letterGrade['LetterGrade']['equivalent']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letterGrade['LetterGrade']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $letterGrade['LetterGrade']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Letter Grade', true), array('action' => 'edit', $letterGrade['LetterGrade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Letter Grade', true), array('action' => 'delete', $letterGrade['LetterGrade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $letterGrade['LetterGrade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Letter Grades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Letter Grade', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
