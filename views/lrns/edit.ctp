<div class="lrns form">
<?php echo $this->Form->create('Lrn');?>
	<fieldset>
		<legend><?php __('Edit Lrn'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lrn');
		echo $this->Form->input('encoded_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Lrn.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Lrn.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lrns', true), array('action' => 'index'));?></li>
	</ul>
</div>