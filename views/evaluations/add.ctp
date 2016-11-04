<style type="text/css">
.page{display:none;}
.w8{
	width:8%;
	text-align:center;
}
.w8 input{
	float:none;
}
.pt10{
	padding-top: 10px;
}
.mt5{
	margin-top: 5px !important;
}
#flashMessage{
	margin-top:0px !important;
}
</style>
<?php if(isset($select)):?>
<h2><?php __('Teacher Evaluation');?></h2>
<div class="three-columns">
	<div id="Form" class="column">
<?php
		echo $this->Form->create('Evaluation',array('action'=>'add'));
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('select',array('type'=>'hidden'));
		echo $this->Form->submit('Evaluate');
		echo $this->Form->end();
?>
</div>
<h2>Select teacher and click <b>Evaluate</b>.</h2>
</div>
<?php	else:?>
	<?php echo $this->Html->script('evaluation',array('inline'=>false)); ?>
	<div class="evaluations form">
	<?php echo $this->Form->create('Evaluation');?>
		<h2>Evaluation: <?php echo $teacher_name;?></h2>
		<?php 
			echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id));
			echo $this->Form->input('teacher_id',array('type'=>'hidden','value'=>$teacher_id));
		?>
		<?php 
			$dtl_indx=0;
			$res_indx=0;
			foreach($categories as $page=>$category):
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
					<!--
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
									<input type="text" id="EvaluationScore<?php echo $que_id;?>" name="data[EvaluationDetail][<?php echo $dtl_indx;?>][score]"   readonly="readonly" />
									<input type="hidden" name="data[EvaluationDetail][<?php echo $dtl_indx;?>][question_id]" value="<?php echo $que_id;?>" />
								</div>
							</li>
						<?php
							$dtl_indx++;
							endforeach;
						?>
					</ol>
					-->
					<table>
						<thead>
							<tr>
								<th></th>
								<th class="w8">10</th>
								<th class="w8">8</th>
								<th class="w8">6</th>
								<th class="w8">4</th>
								<th class="w8">2</th>
								<th class="w8">Score</th>
							</tr>
						</thead>
						<tbody>
							<?php $ctr = 1;?>
							<?php foreach($group_questions[$cat_id] as $question):
								$que_id = $question['Question']['id'];
							?>	
									
							<tr>
								<td class="pt10"><?php echo $ctr++ .'. '.$question['Question']['question'];?></td>
								<td class="w8 choices"><input class="mt5" type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="10" /></td>
								<td class="w8 choices"><input class="mt5" type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="8" /></td>
								<td class="w8 choices"><input class="mt5" type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="6" /></td>
								<td class="w8 choices"><input class="mt5" type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="4" /></td>
								<td class="w8 choices"><input class="mt5" type="radio" name="EvaluationChoices<?php echo $que_id;?>" value="2" /></td>
								<td class="w8 choices">
									<input class="per-item-score" type="text" id="EvaluationScore<?php echo $que_id;?>" name="data[EvaluationDetail][<?php echo $dtl_indx;?>][score]" readonly="readonly" />
									<input type="hidden" name="data[EvaluationDetail][<?php echo $dtl_indx;?>][question_id]" value="<?php echo $que_id;?>" />
								</td>
							</tr>
							<?php
								$dtl_indx++;
								endforeach;
							?>
						</tbody>
					</table>
				<?php endif;?>
				<div class="total pull-right" style="width:60px;padding-left:25px;">
					<label for="">Total</label>
					<input type="text" class="total total-<?php echo $page;?>" id="EvaluationTotal<?php echo $page;?>" name="data[EvaluationResult][<?php echo $res_indx;?>][total]" readonly="readonly" />
					<input type="hidden" class="precent precent-<?php echo $page;?>" name="EvaluationPercent<?php echo $page;?>"  readonly="readonly" value="<?php echo $percentage;?>" />
					<input type="hidden" class="score score-<?php echo $page;?>" id="EvaluationScore<?php echo $page;?>" name="data[EvaluationResult][<?php echo $res_indx;?>][score]"  readonly="readonly" />
					<input type="hidden" name="data[EvaluationResult][<?php echo $res_indx;?>][category_id]" value="<?php echo $cat_id;?>" />
				</div>
			</fieldset>
		<?php
			$res_indx++;
			endforeach;
		?>
		<input name="data[Evaluation][score]" type="hidden" id="EvaluationScore">
		<div class="controls">
			<div id="ErrorMessage" style="background-color:#e32;color:#fff;">
				<p style="display:inline;"></p>
				<a style="color:#fff">&times;</a>
			</div>
			<div class="action">
					<button id="back-button">Back</button>
			</div>
			<div class="action pull-right">
					<button id="proceed-button">Proceed</button>
			</div>
			
		</div>
	<?php //echo $this->Form->end(__('Submit', true));?>
	</div>
<?php endif;?>