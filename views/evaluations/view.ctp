	<div class="evaluations view">
	<h2><?php  __('Evaluation');?></h2>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evaluation['Evaluation']['id']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Student'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($evaluation['Student']['id'], array('controller' => 'students', 'action' => 'view', $evaluation['Student']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($evaluation['Teacher']['id'], array('controller' => 'teachers', 'action' => 'view', $evaluation['Teacher']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Score'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evaluation['Evaluation']['score']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evaluation['Evaluation']['created']; ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Edit Evaluation', true), array('action' => 'edit', $evaluation['Evaluation']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Delete Evaluation', true), array('action' => 'delete', $evaluation['Evaluation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluation['Evaluation']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Evaluations', true), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Evaluation', true), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php __('Related Evaluation Details');?></h3>
		<?php if (!empty($evaluation['EvaluationDetail'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('Evaluation Id'); ?></th>
			<th><?php __('Question Id'); ?></th>
			<th><?php __('Score'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($evaluation['EvaluationDetail'] as $evaluationDetail):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $evaluationDetail['id'];?></td>
				<td><?php echo $evaluationDetail['evaluation_id'];?></td>
				<td><?php echo $evaluationDetail['question_id'];?></td>
				<td><?php echo $evaluationDetail['score'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'evaluation_details', 'action' => 'view', $evaluationDetail['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'evaluation_details', 'action' => 'edit', $evaluationDetail['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'evaluation_details', 'action' => 'delete', $evaluationDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationDetail['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Evaluation Detail', true), array('controller' => 'evaluation_details', 'action' => 'add'));?> </li>
			</ul>
		</div>
	</div>
	<div class="related">
		<h3><?php __('Related Evaluation Results');?></h3>
		<?php if (!empty($evaluation['EvaluationResult'])):?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php __('Id'); ?></th>
			<th><?php __('Evaluation Id'); ?></th>
			<th><?php __('Category Id'); ?></th>
			<th><?php __('Score'); ?></th>
			<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
			$i = 0;
			foreach ($evaluation['EvaluationResult'] as $evaluationResult):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td><?php echo $evaluationResult['id'];?></td>
				<td><?php echo $evaluationResult['evaluation_id'];?></td>
				<td><?php echo $evaluationResult['category_id'];?></td>
				<td><?php echo $evaluationResult['score'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View', true), array('controller' => 'evaluation_results', 'action' => 'view', $evaluationResult['id'])); ?>
					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'evaluation_results', 'action' => 'edit', $evaluationResult['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('controller' => 'evaluation_results', 'action' => 'delete', $evaluationResult['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evaluationResult['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('New Evaluation Result', true), array('controller' => 'evaluation_results', 'action' => 'add'));?> </li>
			</ul>
		</div>
	</div>
