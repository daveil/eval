<div class="evaluationResults index">
	<h2><?php __('Evaluation Results');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('evaluation_id');?></th>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('total');?></th>
			<th><?php echo $this->Paginator->sort('score');?></th>
			<th><?php echo $this->Paginator->sort('equivalent');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($evaluationResults as $evaluationResult):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $evaluationResult['EvaluationResult']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluationResult['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationResult['Evaluation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evaluationResult['Category']['name'], array('controller' => 'categories', 'action' => 'view', $evaluationResult['Category']['id'])); ?>
		</td>
		<td><?php echo $evaluationResult['EvaluationResult']['total']; ?>&nbsp;</td>
		<td><?php echo $evaluationResult['EvaluationResult']['score']; ?>&nbsp;</td>
		<td><?php echo $evaluationResult['EvaluationResult']['equivalent']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evaluationResult['EvaluationResult']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $evaluationResult['EvaluationResult']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $evaluationResult['EvaluationResult']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationResult['EvaluationResult']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evaluation Result', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>