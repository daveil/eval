<div class="students form">
<form action="/eval/students/add" id="StudentAddForm" method="post" accept-charset="utf-8" style="margin-top: 130px;">
<?php echo $this->Form->create('Student');?>
	<fieldset>
		<legend><?php __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('slug');
		echo $this->Form->input('age');
		echo $this->Form->input('section_id');
		echo $this->Form->input('gender', 
					array(
					'type'=>'radio',
					'options'=>array('M'=>'Male','F'=>'Female'),
					'class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluations', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation', true), array('controller' => 'evaluations', 'action' => 'add')); ?> </li>
	</ul>
</div>