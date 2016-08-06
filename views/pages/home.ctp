
<?php if(!$user):?>
<div class="home index">
	<h2>Welcome user!</h2>
	<br/>
	<h3>Please Log In</h3>

	<br/><br/><br/><br/><br/><br/>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Register', true), array('controller' => '', 'action' => 'register')); ?> </li>
		<li><?php echo $this->Html->link(__('Login', true), array('controller' => '', 'action' => 'login')); ?> </li>
	</ul>
</div>
	

<?php else:?>
	<div class="home index">
		<h2>Welcome <?php echo $user['User']['first_name'].' '.$user['User']['last_name']?>!</h2>
		<br/><br/><br/><br/><br/><br/><br/>
	</div>
	<?php if($user['User']['is_admin'] == 1):?>
		<div class="actions">
			<ul>
				<li>
					<?php echo $this->Html->link(__('Faculty', true), 
								array(
										'controller' => 'teachers', 
										'action' => 'index'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Questionnaire', true), 
								array(
										'controller' => 'questions', 
										'action' => 'index'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Evaluation Result', true), 
								array(
										'controller' => 'evaluations', 
										'action' => 'index'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Logout', true), 
								array(
										'controller' => 'users', 
										'action' => 'logout'
									)); ?>
				</li>
				
			
		
			</ul> 
		<!--	
			<ul>
				<li><?php echo $this->Html->link(__('Result', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
				
				<li>
					<a href="#Misc" class="dropdown-toggle">Basic 201</a>
					<ul id="Misc">
						<li><?php echo $this->Html->link(__('Categories', true), array('controller' => 'categories', 'action' => '/')); ?> </li>
						
						<li><?php echo $this->Html->link(__('Questions', true), array('controller' => 'questions', 'action' => '/')); ?> </li>
						<li><?php echo $this->Html->link(__('Users', true), array('controller' => 'users', 'action' => '/')); ?> </li>
						<li><?php echo $this->Html->link(__('Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
			
					</ul>
				</li>
				<li><?php echo $this->Html->link(__('About Us', true), array('controller' => 'pages', 'action' => 'about-us')); ?> </li>
				<li>
					<a href="#User" class="dropdown-toggle">Profile</a>
					<ul id="User">
						<li><?php echo $this->Html->link(__('Setting', true), array('controller' => 'users', 'action' => 'account_setting')); ?></li>
						<li><?php echo $this->Html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>
				
					</ul>
				</li>
					
			</ul>
		-->
		</div>
	<?php else:?>
		<div class="actions">
			<ul>
				<li>
					<?php echo $this->Html->link(__('Profile', true), 
								array(
										'controller' => 'users', 
										'action' => 'account_setting'
									)); ?>
				</li>
				<li>
					<a href="#faculty" class="dropdown-toggle">Faculty Evaluation</a>
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
				</li>
				<li>
					<?php echo $this->Html->link(__('Result', true), 
								array(
										'controller' => 'evaluations', 
										'action' => 'index'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('About Us', true), array('controller' => 'pages', 'action' => 'about-us')); ?>
				</li>
			</ul>
		<!--	
			<ul>
				<li>
					<a href="#faculty" class="dropdown-toggle">Faculty Evaluation</a>
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
				</li>
				<li>
					<?php echo $this->Html->link(__('About Us', true), array('controller' => 'pages', 'action' => 'about-us')); ?>
				</li>
				<li>
					<a href="#User" class="dropdown-toggle">Profile</a>
					<ul id="User">
						<li><?php echo $this->Html->link(__('Setting', true), array('controller' => 'users', 'action' => 'account_setting')); ?></li>
						<li><?php echo $this->Html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>
				
					</ul>
				</li>
			</ul>
		-->
		</div>

	<?php endif;?>
<?php endif;?>

<!--
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
-->