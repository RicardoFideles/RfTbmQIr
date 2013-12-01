<div class="interviews index">
	<h2><?php echo __('Interviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('emfoco'); ?></th>
			<th><?php echo $this->Paginator->sort('subtitulo'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($interviews as $interview): ?>
	<tr>
		<td><?php echo h($interview['Interview']['id']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['name']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['slug']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['emfoco']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['subtitulo']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['texto']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['created']); ?>&nbsp;</td>
		<td><?php echo h($interview['Interview']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interview['Interview']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interview['Interview']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interview['Interview']['id']), null, __('Are you sure you want to delete # %s?', $interview['Interview']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Interview'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
