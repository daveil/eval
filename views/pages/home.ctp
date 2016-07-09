<div class="home index">
	<h2>Welcome user!</h2>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Profile', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Faculty Evaluation', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Result', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('About Us', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>