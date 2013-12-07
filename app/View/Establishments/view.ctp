<div class="establishments view">
<h2><?php echo __('Establishment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($establishment['Category']['name'], array('controller' => 'categories', 'action' => 'view', $establishment['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($establishment['City']['name'], array('controller' => 'cities', 'action' => 'view', $establishment['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informacoes'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['informacoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visual'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['visual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auditiva'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['auditiva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motora'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['motora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intelectual'); ?></dt>
		<dd>
			<?php echo h($establishment['Establishment']['intelectual']); ?>
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
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
