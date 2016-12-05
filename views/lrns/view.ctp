<div class="lrns view">
<h2><?php  __('Lrn');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lrn['Lrn']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lrn'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lrn['Lrn']['lrn']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Encoded By'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lrn['Lrn']['encoded_by']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lrn['Lrn']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lrn['Lrn']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lrn', true), array('action' => 'edit', $lrn['Lrn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Lrn', true), array('action' => 'delete', $lrn['Lrn']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lrn['Lrn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lrns', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lrn', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
