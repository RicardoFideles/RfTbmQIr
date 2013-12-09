<div class="enquetes index">
	<h2><?php echo __('Enquetes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('destaque'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th><?php echo $this->Paginator->sort('opcao_1'); ?></th>
			<th><?php echo $this->Paginator->sort('resposta_1'); ?></th>
			<th><?php echo $this->Paginator->sort('opcao_2'); ?></th>
			<th><?php echo $this->Paginator->sort('resposta_2'); ?></th>
			<th><?php echo $this->Paginator->sort('opcao_3'); ?></th>
			<th><?php echo $this->Paginator->sort('resposta_3'); ?></th>
			<th><?php echo $this->Paginator->sort('opcao_4'); ?></th>
			<th><?php echo $this->Paginator->sort('resposta_4'); ?></th>
			<th><?php echo $this->Paginator->sort('opcao_5'); ?></th>
			<th><?php echo $this->Paginator->sort('resposta_5'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($enquetes as $enquete): ?>
	<tr>
		<td><?php echo h($enquete['Enquete']['id']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['name']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['status']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['destaque']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['texto']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['opcao_1']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['resposta_1']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['opcao_2']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['resposta_2']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['opcao_3']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['resposta_3']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['opcao_4']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['resposta_4']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['opcao_5']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['resposta_5']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['created']); ?>&nbsp;</td>
		<td><?php echo h($enquete['Enquete']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $enquete['Enquete']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $enquete['Enquete']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $enquete['Enquete']['id']), null, __('Are you sure you want to delete # %s?', $enquete['Enquete']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Enquete'), array('action' => 'add')); ?></li>
	</ul>
</div>
