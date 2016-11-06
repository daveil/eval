
<div class="registrations form">
<?php echo $this->Form->create('User',array('action'=>'account_setting'));?>
	<fieldset>
		<legend><?php __('Edit Account'); ?></legend>
		<?php
			echo $this->Form->input('id',array('value'=>$data['User']['id']));
			echo $this->Form->input('username',array('value'=>$data['User']['username']));
			echo $this->Form->input('current_password',array('type'=>'password','required'=>'required','value'=>false));
		?>
		<hr/>
		
		<div class="control-group">
			<label for="ChangePassword" class="control-label">Change Password</label>
			<div class="controls">
				<input type="checkbox" id="ChangePassword"> 
			</div>
		</div>
		<div id="NewPasswordWrapper">
			<?php
				echo $this->Form->input('new_password',array('disabled'=>'disabled','value'=>false,'type'=>'password'));
				echo $this->Form->input('re-type_new_password',array('disabled'=>'disabled','value'=>false,'type'=>'password'));
			?>
		</div>
		<hr/>
		
		<div class="control-group">
			<label for="ChangeInfo" class="control-label">Change Info</label>
			<div class="controls">
				<input type="checkbox" id="ChangeInfo"> 
			</div>
		</div>
		<div id="InfoWrapper">
			<?php
				echo $this->Form->input('last_name',array('value'=>$data['User']['last_name'],'disabled'=>'disabled','required'=>'required'));
				echo $this->Form->input('first_name',array('value'=>$data['User']['first_name'],'disabled'=>'disabled','required'=>'required'));
				echo $this->Form->input('middle_name',array('value'=>$data['User']['middle_name'],'disabled'=>'disabled'));
				if(!$data['User']['is_admin']){
					echo $this->Form->input('Student.id',array('value'=>$data['Student']['id'],'type'=>'hidden','required'=>'required'));
					echo $this->Form->input('Student.age',array('value'=>$data['Student']['age'],'disabled'=>'disabled','required'=>'required'));
					echo $this->Form->input('Student.section_id',array('value'=>$data['Student']['section_id'],'options'=>$sections,'disabled'=>'disabled','required'=>'required'));
					echo $this->Form->input('Student.gender', 
						array(
						'type'=>'radio',
						'options'=>array('M'=>'Male','F'=>'Female'),
						'disabled'=>'disabled',
						'value'=>$data['Student']['gender'],
						'class'=>'form-control'));
				}
			?>	
		</div>
		
	</fieldset>
	<?php echo $this->Form->submit('Submit', array('id'=>'SubmitButton','disabled'=>'disabled'));?>
	<?php echo $this->Form->end();?>
</div>
	
	
<div id="LoginUser" style="display:none"><?php echo $data['User']['username'];?></div>
<br/><br/><br/>


<?php
	echo $this->Html->script(array('account_setting'),array('inline'=>false));
?>