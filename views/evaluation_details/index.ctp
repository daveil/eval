<div class="evaluationDetails index">
	<h2 style="margin-top: -133px;"><?php __('Evaluation Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('evaluation_id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('score');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($evaluationDetails as $evaluationDetail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $evaluationDetail['EvaluationDetail']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evaluationDetail['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationDetail['Evaluation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($evaluationDetail['Question']['id'], array('controller' => 'questions', 'action' => 'view', $evaluationDetail['Question']['id'])); ?>
		</td>
		<td><?php echo $evaluationDetail['EvaluationDetail']['score']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $evaluationDetail['EvaluationDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $evaluationDetail['EvaluationDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $evaluationDetail['EvaluationDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationDetail['EvaluationDetail']['id'])); ?>
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
		
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>