<div class="tracks index">
	<!-- <div class="row">
		<div class="col-sm-12">
			<a href="/cargador" class="btn btn-primary pull-right">
				Cargador
			</a>
		</div>
	</div>
	
	<h2><?php echo __('Listado'); ?></h2>
	<div class="row">
		<div class="col-sm-12 text-center">
			<p>
				<?php
				echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}')));
				?>	
			</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('anterior '), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' | '));
				echo $this->Paginator->next(__(' siguiente') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		</div>
	</div>
	<br /> -->
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('title', 'Título'); ?></th>
			<th><?php echo $this->Paginator->sort('formato'); ?></th>
			<th><?php echo $this->Paginator->sort('capitulos', 'Capítulos'); ?></th>
			<th><?php echo $this->Paginator->sort('duracion', 'Duración'); ?></th>
			<th><?php echo $this->Paginator->sort('director'); ?></th>
			<th><?php echo $this->Paginator->sort('productor'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('entryId', 'Video ID'); ?></th> -->
			<!-- <th><?php echo $this->Paginator->sort('portadaId', 'Portada ID'); ?></th> -->
			<th class="actions"><!-- <?php echo __('Actions'); ?> --></th>
	</tr>
	<?php foreach ($tracks as $track): ?>
	<tr>
		<td><?php echo h($track['Track']['title']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['formato']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['capitulos']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['duracion']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['director']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['productor']); ?>&nbsp;</td>
		<!-- <td><?php echo h($track['Track']['entryId']); ?>&nbsp;</td> -->
		<td class="actions col-sm-3">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $track['Track']['id']), array('class'=>'btn btn-primary')); ?>
			<?php 
			echo $this->Html->link(__('Editar')
				, Router::url('/editar/' . $track['Track']['id'])
				, array('class'=>'btn btn-primary')
			);
			?>
			<?php 
			echo $this->Form->postLink(__('Eliminar')
				, array('action' => 'delete', $track['Track']['id'])
				, array('class'=>'btn btn-primary')
				, __('¿Estás seguro que quieres eliminar "%s"?', $track['Track']['title'])
			);
			?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="row">
		<div class="col-sm-12 text-center">
			<p>
				<?php
				echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}')));
				?>	
			</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('anterior '), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' | '));
				echo $this->Paginator->next(__(' siguiente') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		</div>
	</div>
</div>
