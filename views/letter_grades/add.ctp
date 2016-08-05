<div class="letterGrades form">
<?php echo $this->Form->create('LetterGrade');?>
	<fieldset>
		<legend><?php __('Add Letter Grade'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Letter Grades', true), array('action' => 'index'));?></li>
	</ul>
</div>