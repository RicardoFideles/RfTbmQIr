<div class="establishments view">
<h2><?php echo __('Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Establishment'), array('action' => 'edit', $establishment['Establishment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Establishment'), array('action' => 'delete', $establishment['Establishment']['id']), null, __('Are you sure you want to delete # %s?', $establishment['Establishment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
