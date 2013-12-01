<div class="users form">
	<?php echo $this->Form->create('User'); ?>
	
	<fieldset>
		<legend><?php echo __('Nuevo Usuario'); ?></legend>

		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label"><?php echo __('Nombre Completo'); ?></label>
				<div class="col-sm-10">
					<?php	echo $this->Form->input('name', array(
						'class' => 'form-control',
						'label' => false,
						'placeholder' => __('Nombre Completo'),
						'required' => 'required',
						'type' => 'text'
					));
			 		?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label"><?php echo __('Nombre de Usuario'); ?></label>
				<div class="col-sm-10">
					<?php	echo $this->Form->input('username', array(
						'class' => 'form-control',
						'label' => false,
						'placeholder' => __('Nombre de Usuario'),
						'required' => 'required',
						'type' => 'text'
					));
			 		?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label"><?php echo __('Contraseña'); ?></label>
				<div class="col-sm-10">
					<?php echo $this->Form->input('password', array(
						'class' => 'form-control',
						'label' => false,
						'placeholder' => __('Contraseña'),
						'required' => 'required',
						'type' => 'password'
					));
					?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label"><?php echo __('Grupo'); ?></label>
				<div class="col-sm-10">
					<?php
					echo $this->Form->input('rol_id', array(
						'class' => 'form-control',
						'label' => false,
					));
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default"><?php echo __('Aceptar'); ?></button>
				</div>
			</div>
		</form>

	</fieldset>
	
	<?php echo $this->Form->end(); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div> -->
