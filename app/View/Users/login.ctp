<?php 
echo $this->Html->css('login', '', array('inline'=>FALSE));
?>

<div class="users form">
	<?php echo $this->Form->create('User') ?>
	
	<div class="row-fluid">
		<form class="form-horizontal" role="form">
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
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default"><?php echo __('Aceptar'); ?></button>
				</div>
			</div>
		</form>
	</div>
	
	<?php echo $this->Form->end() ?>
	
</div>