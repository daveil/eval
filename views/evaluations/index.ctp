<div class="evaluations index">
	<h2><?php __('Evaluations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('student_id');?></th>
			<th><?php echo $this->Paginator->sort('teacher_id');?></th>
			<th><?php echo $this->Paginator->sort('score');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($evaluations as $evaluation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $evaluation['Evaluation']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluation['Student']['id'], array('controller' => 'students', 'action' => 'view', $evaluation['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evaluation['Teacher']['id'], array('controller' => 'teachers', 'action' => 'view', $evaluation['Teacher']['id'])); ?>
		</td>
		<td><?php echo $evaluation['Evaluation']['score']; ?>&nbsp;</td>
		<td><?php echo $evaluation['Evaluation']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evaluation['Evaluation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $evaluation['Evaluation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $evaluation['Evaluation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluation['Evaluation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Details', true), array('controller' => 'evaluation_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Detail', true), array('controller' => 'evaluation_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Results', true), array('controller' => 'evaluation_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Result', true), array('controller' => 'evaluation_results', 'action' => 'add')); ?> </li>
	</ul>
</div>