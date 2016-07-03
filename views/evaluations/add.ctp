<style type="text/css">
div.question{float:left;width:60%;display:inline-block;}
div.choices{float:right;width:40%;display:inline-block;}
div.choices>input[type="radio"]{display:inline-block;width:50px;float:none;}
div.choices>span{width:50px;display:inline-block;text-align:center;}
</style>
<div class="evaluations form">
<?php echo $this->Form->create('Evaluation');?>
	<fieldset>
		<legend><?php __('New Evaluation'); ?></legend>
	<?php
		echo $this->Form->input('student_id');
		echo $this->Form->input('teacher_id');
	?>
	</fieldset>
	<?php foreach($categories as $category):?>
		<?php
			$cat_id = $category['Category']['id'];
			$code = explode('-',$category['Category']['code']);
			$title = 'Test '.$code[0];
			if(isset($code[1])){
				$title.= ' '.$code[1];
			}
			$title .=' '.$category['Category']['name'];
			$title .=' ('.$category['Category']['precentage'].'%)';
		?>
		<fieldset>
			<legend><?php echo $title;?></legend>
			<?php if(count($group_questions[$cat_id])):?>
			
				<div class="choices">
					<span>10</span>
					<span>8</span>
					<span>6</span>
					<span>4</span>
					<span>2</span>
				</div>
				<div class="clearfix"></div>
				<ol>
					<?php foreach($group_questions[$cat_id] as $question):
							$que_id = $question['Question']['id'];
					?>
						<li>
							<span class="question">
								<?php echo $question['Question']['question'];?>
							</span>
							<div class="choices">
								<input type="radio" name="EvaluationResponse<?php echo $que_id;?>" value="10" />
								<input type="radio" name="EvaluationResponse<?php echo $que_id;?>" value="8" />
								<input type="radio" name="EvaluationResponse<?php echo $que_id;?>" value="6" />
								<input type="radio" name="EvaluationResponse<?php echo $que_id;?>" value="4" />
								<input type="radio" name="EvaluationResponse<?php echo $que_id;?>" value="2" />
							</div>
						</li>
					<?php endforeach;?>
				</ol>
			<?php endif;?>
			
		</fieldset>
	<?php endforeach;?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Evaluations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Details', true), array('controller' => 'evaluation_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Detail', true), array('controller' => 'evaluation_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluation Results', true), array('controller' => 'evaluation_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluation Result', true), array('controller' => 'evaluation_results', 'action' => 'add')); ?> </li>
	</ul>
</div>