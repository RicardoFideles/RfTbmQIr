<div class="enquetes form">
<?php echo $this->Form->create('Enquete'); ?>
	<fieldset>
		<legend><?php echo __('Add Enquete'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('status');
		echo $this->Form->input('destaque');
		echo $this->Form->input('texto');
		echo $this->Form->input('opcao_1');
		echo $this->Form->input('resposta_1');
		echo $this->Form->input('opcao_2');
		echo $this->Form->input('resposta_2');
		echo $this->Form->input('opcao_3');
		echo $this->Form->input('resposta_3');
		echo $this->Form->input('opcao_4');
		echo $this->Form->input('resposta_4');
		echo $this->Form->input('opcao_5');
		echo $this->Form->input('resposta_5');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Enquetes'), array('action' => 'index')); ?></li>
	</ul>
</div>
