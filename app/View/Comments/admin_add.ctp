<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Add Comment'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('texto');
		echo $this->Recaptcha->display(array('recaptchaOptions'=>array('theme' => 'clean')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
