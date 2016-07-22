<div class="home index">
	<h2>Welcome user!</h2>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Profile', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li>
			<a href="#faculty" class="dropdown-toggle">Faculty Evaluation</a>
			<ul id="faculty">
				<?php 
					foreach($Teachers as $teacher):
						$id =  $teacher['Teacher']['id'];
						$name =  $teacher['Teacher']['full_name'];
				?>
				<li>
					<?php echo $this->Html->link(__($name, true), array('controller' => 'evaluations', 'action' => 'add','teacher_id'=>$id)); ?>
				</li>
				<?php
					endforeach;
				?>
			</ul>
		</li>
		<li><?php echo $this->Html->link(__('Result', true), array('controller' => 'evaluations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('About Us', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>