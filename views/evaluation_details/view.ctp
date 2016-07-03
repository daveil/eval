<div class="evaluationDetails view">
<h2><?php  __('Evaluation Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evaluationDetail['EvaluationDetail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Evaluation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationDetail['Evaluation']['id'], array('controller' => 'evaluations', 'action' => 'view', $evaluationDetail['Evaluation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($evaluationDetail['Question']['id'], array('controller' => 'questions', 'action' => 'view', $evaluationDetail['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $evaluationDetail['EvaluationDetail']['score']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluation Detail', true), array('action' => 'edit', $evaluationDetail['EvaluationDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Evaluation Detail', true), array('action' => 'delete', $evaluationDetail['EvaluationDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationDetail['EvaluationDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Detail', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
