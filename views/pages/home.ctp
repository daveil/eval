
<?php if(!$user):?>	
<div class="home index" style="margin-left: 85fpx;margin-top: 20px;" >
	<h2>Welcome user!</h2>
	<br/>
	<h3>Please Log In</h3>

	
</div>
<div class="actions" style="margin-left: 90px;margin-top: 20px;">
	<ul>
		<li><?php echo $this->Html->link(__('Register', true), array('controller' => '', 'action' => 'register')); ?> </li>
		<li><?php echo $this->Html->link(__('Login', true), array('controller' => '', 'action' => 'login')); ?> </li>
	</ul>
</div>
	

<?php else:?>
	<div class="home index">
	<h2 style="margin-left: 90px;margin-top: -125px;font-size: xx-large;"> Welcome <?php echo $user['User']['first_name'].' '.$user['User']['last_name']?>!</h2>
	</div>
	<?php if($user['User']['is_admin'] == 1):?>
		<!--admin menu -->
		<div class="actions" style="margin-left: 90px;margin-top: 40px;">
			<ul style="margin-left: -82px;">
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
					<?php echo $this->Html->link(__('Section', true), 
								array(
										'controller' => 'sections', 
										'action' => 'index'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Student', true), 
								array(
										'controller' => 'students', 
										'action' => 'index'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Contents', true), 
								array(
										'controller' => 'contents', 
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
		<!--student menu -->
		<div class="actions" style="margin-left: 200px;margin-top: 29px;" >
			<ul>
				<li>
					<?php echo $this->Html->link(__('Profile', true), 
								array(
										'controller' => 'users', 
										'action' => 'account_setting'
									)); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Faculty Evaluation', true), 
								array(
										'controller' => 'evaluations', 
										'action' => 'add?select'
									)); 
									?>
					<?php if(false):?>				
					<a href="#faculty" class="dropdown-toggle ">Faculty Evaluation</a>
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
					<?php endif; ?>
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
				<li> 
				<?php echo $this->Html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> 
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
<center>
	<img src="/eval/img/sci.jpg" alt style="margin-top: -93px;">
</center>
<br>	
<?php if($user):?>
<div class="home index" style="margin:0 auto;">
		<?php  $scheds =  $this->requestAction('schedules?active'); ?>
			<table cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						
						<?php if($user['User']['is_admin'] == 1):?>
						<th>Online Faculty Evaluation Schedule</th>
						<th style="text-align:right;">
							<?php echo $this->Html->link(__('Manage Schedules', true), 
								array(
										'controller' => 'schedules', 
										'action' => 'index'
									)); ?>
						</th>
						<?php else:?>
						<th colspan="2">Online Faculty Evaluation Schedule</th>
						<?php endif;?>
					</tr>
					<?php 
						if(count($scheds)):
							foreach($scheds as $sched):?>
						<tr> 
							<td colspan="2"><?php echo $sched['Section']['name'];?></td>
						</tr>
						<tr> 
							<td>Start: <?php echo date('M d Y h:i A',strtotime($sched['Schedule']['start_sched']));?></td>
							<td>End: <?php echo date('M d Y h:i A',strtotime($sched['Schedule']['end_sched']));?></td>
						</tr>
					<?php 
							endforeach;
						else:
					?>
						<tr><td>No schedule yet.</td></tr>
					<?php endif; ?>
				</tbody>
			</table>
		<br />
	</div>
<?php endif;?>
	