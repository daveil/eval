<div class="teachers index">
	<h2><?php __('Teachers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('middle_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($teachers as $teacher):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $teacher['Teacher']['id']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['last_name']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['first_name']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['middle_name']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['gender']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['created']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $teacher['Teacher']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $teacher['Teacher']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $teacher['Teacher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['Teacher']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Teacher', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>