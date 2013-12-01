<div class="interviews view">
<h2><?php echo __('Interview'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emfoco'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['emfoco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtitulo'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['subtitulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($interview['Interview']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interview'), array('action' => 'edit', $interview['Interview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interview'), array('action' => 'delete', $interview['Interview']['id']), null, __('Are you sure you want to delete # %s?', $interview['Interview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interview'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($interview['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('News Id'); ?></th>
		<th><?php echo __('Interview Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Mimetype'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($interview['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['news_id']; ?></td>
			<td><?php echo $photo['interview_id']; ?></td>
			<td><?php echo $photo['person_id']; ?></td>
			<td><?php echo $photo['name']; ?></td>
			<td><?php echo $photo['dir']; ?></td>
			<td><?php echo $photo['mimetype']; ?></td>
			<td><?php echo $photo['filesize']; ?></td>
			<td><?php echo $photo['created']; ?></td>
			<td><?php echo $photo['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
