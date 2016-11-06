<div class="questions form">
<br><br><br><br><br><br><br><br>
<?php echo $this->Form->create('Question');?>
	<fieldset>
		<legend><?php __('Add Question'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('question');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Details', true), array('controller' => 'evaluation_details', 'action' => 'index')); ?> </li>
		
	</ul>
</div>