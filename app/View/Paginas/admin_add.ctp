<?php echo $this->element('editor/index'); ?>

<div class="paginas form">
<?php echo $this->Form->create('Pagina'); ?>
	<fieldset>
		<legend><?php echo __('Add Pagina'); ?></legend>
	<?php
		echo $this->Form->input('name');
		
		echo $this->Form->input('tipo', 
			array(
            	'options' => array('historia' => 'História', 'sobre' => 'Sobre', 'politica-de-privacidade' => 'Política de Privacidade')
        	)
		);
		
		echo $this->Form->input('texto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Paginas'), array('action' => 'index')); ?></li>
	</ul>
</div>
