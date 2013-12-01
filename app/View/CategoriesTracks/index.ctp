<div class="categoriesTracks index">
	<h2><?php echo __('Categories Tracks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('track_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoriesTracks as $categoriesTrack): ?>
	<tr>
		<td><?php echo h($categoriesTrack['CategoriesTrack']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoriesTrack['CategoriesTrack']['created']); ?>&nbsp;</td>
		<td><?php echo h($categoriesTrack['CategoriesTrack']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoriesTrack['Category']['title'], array('controller' => 'categories', 'action' => 'view', $categoriesTrack['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($categoriesTrack['Track']['title'], array('controller' => 'tracks', 'action' => 'view', $categoriesTrack['Track']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriesTrack['CategoriesTrack']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriesTrack['CategoriesTrack']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriesTrack['CategoriesTrack']['id']), null, __('Are you sure you want to delete # %s?', $categoriesTrack['CategoriesTrack']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Categories Track'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>