<div class="letterGrades index">
	<h2><?php __('Letter Grades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('min_grade');?></th>
			<th><?php echo $this->Paginator->sort('max_grade');?></th>
			<th><?php echo $this->Paginator->sort('equivalent');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($letterGrades as $letterGrade):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $letterGrade['LetterGrade']['id']; ?>&nbsp;</td>
		<td><?php echo $letterGrade['LetterGrade']['min_grade']; ?>&nbsp;</td>
		<td><?php echo $letterGrade['LetterGrade']['max_grade']; ?>&nbsp;</td>
		<td><?php echo $letterGrade['LetterGrade']['equivalent']; ?>&nbsp;</td>
		<td><?php echo $letterGrade['LetterGrade']['created']; ?>&nbsp;</td>
		<td><?php echo $letterGrade['LetterGrade']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $letterGrade['LetterGrade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $letterGrade['LetterGrade']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $letterGrade['LetterGrade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $letterGrade['LetterGrade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Letter Grade', true), array('action' => 'add')); ?></li>
	</ul>
</div>