<div class="eventsTags form">
<?php echo $this->Form->create('EventsTag');?>
	<fieldset>
		<legend><?php echo __('Add Events Tag'); ?></legend>
	<?php
		echo $this->Form->input('event_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->submit(__('Submit'));?>
<?php echo $this->Html->link(__('Cancel'), array('action' => 'index'));?>
<?php echo $this->Form->end();?>
</div>
<div class="actions">
	<?php echo $this->element('tr_menu'); ?></div>
