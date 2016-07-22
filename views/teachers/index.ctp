<?php echo $this->Html->script('teachers',array('inline'=>false)); ?>
<h2><?php __('Teachers');?></h2>
<div class="two-columns">
	<div id="Form" class="column">
	<?php
		echo $this->Form->create('Teachers');
		echo $this->Form->input('teacher_id');
		echo $this->Form->submit('View');
		
		echo $this->Form->end();
	?>
	</div>
	<div id="Teacher" class="column">
		<?php echo $this->Form->create('Teacher',array('action'=>'edit'));?>
		<fieldset>
			<legend><?php __('Teacher'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('last_name');
			echo $this->Form->input('first_name');
			echo $this->Form->input('middle_name');
			echo $this->Form->input('gender');
		?>
		</fieldset>
		
		<?php 
			if(isset($this->data)):
			echo $this->Form->submit('Delete',array('id'=>'DeleteButton'));
			echo $this->Form->submit('Save');
			else:
			echo $this->Form->submit('Add');
			endif;
			echo $this->Form->end();
		?>
	</div>
</div>