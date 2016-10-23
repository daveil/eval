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
	width: 100%;
}
</style>
<div class="contents form">
<?php echo $this->Form->create('Content');?>
	<fieldset>
	
		<legend><?php __('Edit Content'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('link');
		echo $this->Form->input('content',array('type'=>"hidden"));
	?>
	<br/>
	<div id="summernote" ></div>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Content.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Content.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contents', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php echo $this->Html->script('edit_contents',array('inline'=>false));?>