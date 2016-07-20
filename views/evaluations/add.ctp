<style type="text/css">
.page{display:none;}
</style>
<?php echo $this->Html->script('evaluation',array('inline'=>false)); ?>
<div class="evaluations form">
<?php echo $this->Form->create('Evaluation');?>
	<h2>Evaluation: <?php echo $teacher_name;?></h2>
	<?php foreach($categories as $page=>$category):?>
		<?php
			$cat_id = $category['Category']['id'];
			$code = explode('-',$category['Category']['code']);
			$name =  $category['Category']['name'];
			$percentage =  $category['Category']['precentage'];
			$title = 'Test '.$code[0];
			if(isset($code[1])){
				$title.= ' '.$code[1];
			}
			$title .=' '.$name;
			$title .=' ('.$percentage.'%)';
		?>
		<fieldset class="page page-<?php echo $page; ?>">
			<legend><?php echo $title;?></legend>
			<?php if(count($group_questions[$cat_id])):?>
			
				<div class="choices">
					<span>10</span>
					<span>8</span>
					<span>6</span>
					<span>4</span>
					<span>2</span>
					<span>Score</span>
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
								<input type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="10" />
								<input type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="8" />
								<input type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="6" />
								<input type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="4" />
								<input type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="2" />
								<input type="text" name="EvaluationScore<?php echo $que_id;?>"  readonly="readonly" />
							</div>
						</li>
					<?php endforeach;?>
				</ol>
			<?php endif;?>
			<div class="total pull-right" style="width:60px;padding-right:25px;">
				<label for="">Total</label>
				<input type="text" class="total total-<?php echo $page;?>" name="EvaluationTotal<?php echo $page;?>"  readonly="readonly" />
				<input type="text" class="precent precent-<?php echo $page;?>" name="EvaluationPercent<?php echo $page;?>"  readonly="readonly" value="<?php echo $percentage;?>" />
				<input type="text" class="equiv equiv-<?php echo $page;?>" name="EvaluationEquiv<?php echo $page;?>"  readonly="readonly" />
			</div>
		</fieldset>
	<?php endforeach;?>
	<div class="controls">
		<div class="action">
				<button id="back-button">Back</button>
		</div>
		<div class="action pull-right">
				<button id="proceed-button">Proceed</button>
		</div>
		
	</div>
<?php //echo $this->Form->end(__('Submit', true));?>
</div>