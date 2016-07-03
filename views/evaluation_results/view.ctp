<div class="evaluationResults view">
<h2><?php  __('Evaluation Result');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evaluationResult['EvaluationResult']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evaluation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationResult['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationResult['Evaluation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationResult['Category']['name'], array('controller' => 'categories', 'action' => 'view', $evaluationResult['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evaluationResult['EvaluationResult']['score']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluation Result', true), array('action' => 'edit', $evaluationResult['EvaluationResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Evaluation Result', true), array('action' => 'delete', $evaluationResult['EvaluationResult']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationResult['EvaluationResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Results', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Result', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
