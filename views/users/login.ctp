
<?php echo $this->Html->script(array('login'),array('inline'=>false));?>

<div class="registrations form">
<?php echo $this->Form->create('User');?>
	<fieldset style="margin-top: -154px;margin-right: -500px;margin-left: -24px;">
		<legend><?php __('Please Sign In'); ?></legend>
			 <?php
				echo $this->Session->flash('auth').'<br>';
				echo $this->Form->input('username',array('placeholder'=>'Username','required'=>'required'));
				echo $this->Form->input('password',array('placeholder'=>'Password','required'=>'required','onkeypress'=>'PasswordCapsLock(event)'));
			?>
			<?php echo $this->Form->submit(__('Login', true));?>
			<?php echo $this->Form->end();?>
	</fieldset>
	<?php echo $this->Form->end();?>
</div>
