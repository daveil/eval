<?php
	echo $this->Html->css('plugins/bootstrap');
	echo $this->Html->css('plugins/summernote');
	echo $this->Html->script('plugins/bootstrap',array('inline'=>false));
	echo $this->Html->script('plugins/summernote',array('inline'=>false));
?>
<style>
form div {
    clear: none;
    margin-bottom: 0;
    padding: 0;
    vertical-align: none;
}
.note-frame{
	width: 98%;
}
</style>
<div class="contents form">
<form action="/eval/contents/add" id="ContentAddForm" method="post" accept-charset="utf-8" style="width: 129%;">
<?php echo $this->Form->create('Content');?>
	<fieldset style="margin-top: -111px;margin-left: -162px;">
		<legend><?php __('Add Content'); ?></legend>
		<?php 
			echo $this->Form->input('title');
			echo $this->Form->input('link');
			echo $this->Form->input('content',array('type'=>"hidden"));
		?>
	<br/>
	<div id="summernote" ></div>
		
	
		
	</fieldset>
	<div class="submit">
	
	<input type="submit" value="Submit" style="margin-left: -164px";>
</div>
<div class="actions" style="margin-left: -164px;">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li style="margin-left: -20px;"><?php echo $this->Html->link(__('List Contents', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php echo $this->Html->script('contents',array('inline'=>false));?>