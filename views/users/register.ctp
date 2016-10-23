
<?php echo $this->Html->script('register',array('inline'=>false)); ?>
<div class="registrations form">
<?php echo $this->Form->create('User',array('action'=>'register'));?>
	<fieldset>
		<legend><?php __('Register'); ?></legend>
		<?php
			echo $this->Form->input('username',array('placeholder'=>'Username','required'=>'required'));
			echo $this->Form->input('password',array('placeholder'=>'Password','required'=>'required','value'=>false));
			echo $this->Form->input('confirm_password',array('placeholder'=>'Re-type Password','required'=>'required','value'=>false,'type'=>'password'));
		?>
		<hr/>
		<?php
			echo $this->Form->input('last_name',array('placeholder'=>'Last Name','required'=>'required'));
			echo $this->Form->input('first_name',array('placeholder'=>'First Name','required'=>'required'));
			echo $this->Form->input('middle_name',array('placeholder'=>'MiddleName','required'=>'required'));
		?>	
	</fieldset>

	<?php echo $this->Form->submit(__('Submit', true), array('id'=>'SubmitButton'));?>
	<?php echo $this->Form->end();?>
</div>