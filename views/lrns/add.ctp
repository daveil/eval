<div class="lrns form">
<?php echo $this->Form->create('Lrn');?>
	<fieldset>
		<legend><?php __('Add Lrn'); ?></legend>
	<?php
		echo $this->Form->input('lrn');
		echo $this->Form->input('encoded_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lrns', true), array('action' => 'index'));?></li>
	</ul>
</div>