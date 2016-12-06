
<?php echo $this->Html->script('register',array('inline'=>false)); ?>
<div class="registrations form">
<?php echo $this->Form->create('User',array('action'=>'register'));?>
	<fieldset style="margin-top: -214px;">
		
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
			echo $this->Form->input('Student.age',array('placeholder'=>'Age','required'=>'required'));
			echo $this->Form->input('Student.lrn',array('placeholder'=>'LRN','required'=>'required'));
			echo $this->Form->input('Student.section_id',array('empty'=>'Select one','options'=>$sections,'required'=>'required'));
			echo $this->Form->input('Student.gender', 
					array(
					'type'=>'radio',
					'options'=>array('M'=>'Male','F'=>'Female'),
					'class'=>'form-control'));
			
		?>	
	</fieldset>

	<?php echo $this->Form->submit(__('Submit', true), array('id'=>'SubmitButton'));?>
	<?php echo $this->Form->end();?>
</div>