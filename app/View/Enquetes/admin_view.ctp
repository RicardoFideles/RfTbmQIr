<div class="enquetes view">
<h2><?php echo __('Enquete'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destaque'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['destaque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcao 1'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['opcao_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resposta 1'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['resposta_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcao 2'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['opcao_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resposta 2'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['resposta_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcao 3'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['opcao_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resposta 3'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['resposta_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcao 4'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['opcao_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resposta 4'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['resposta_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opcao 5'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['opcao_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resposta 5'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['resposta_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($enquete['Enquete']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Enquete'), array('action' => 'edit', $enquete['Enquete']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Enquete'), array('action' => 'delete', $enquete['Enquete']['id']), null, __('Are you sure you want to delete # %s?', $enquete['Enquete']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Enquetes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enquete'), array('action' => 'add')); ?> </li>
	</ul>
</div>
