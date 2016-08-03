
<?php if($user):?>
	<?php if($user['User']['is_admin'] == 0):?>
		<div class="home index">
			<h2>Welcome <?php echo strtoUpper($user['User']['first_name']);?>!</h2>
			<br/>
			<h3>SELECT YOUR TEACHER</h3>
			<div class="actions">
				<ul id="faculty">
					<?php 
						foreach($Teachers as $teacher):
							$id =  $teacher['Teacher']['id'];
							$name =  $teacher['Teacher']['full_name'];
					?>
					<li>
						<?php echo $this->Html->link(__($name, true), array('controller' => 'evaluations', 'action' => 'add','teacher_id'=>$id,'student_id'=>$user['User']['id'])); ?>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	<?php elseif ($user['User']['is_admin'] == 1):?>
		<div class="home index">
			<h2>Welcome Admin <?php echo strtoUpper($user['User']['first_name']);?>!</h2>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		</div>
	<?php endif;?>
<?php else:?>
<div class="home index">
	<h2>Welcome!</h2>
	<br/>
	<h3>Please Log In</h3>

	<br/><br/><br/><br/><br/><br/>
	<br/><br/><br/><br/><br/><br/>
</div>
<?php endif;?>