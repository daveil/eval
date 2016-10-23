<div class="letterGrades form">
<?php echo $this->Form->create('LetterGrade');?>
	<fieldset>
		<legend><?php __('Edit Letter Grade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('min_grade');
		echo $this->Form->input('max_grade');
		echo $this->Form->input('equivalent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('LetterGrade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('LetterGrade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Letter Grades', true), array('action' => 'index'));?></li>
	</ul>
</div>