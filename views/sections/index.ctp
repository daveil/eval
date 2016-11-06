<div class="sections index">
	<h2><?php __('Sections');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sections as $section):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $section['Section']['id']; ?>&nbsp;</td>
		<td><?php echo $section['Section']['name']; ?>&nbsp;</td>
		<td><?php echo $section['Section']['created']; ?>&nbsp;</td>
		<td><?php echo $section['Section']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $section['Section']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $section['Section']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $section['Section']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $section['Section']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Section', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules', true), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule', true), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>