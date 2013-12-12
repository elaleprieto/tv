<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

<?php
echo $this->Html->css(array('tracks/add', 'vendor/jquery.tagsinput'));
echo $this->Html->script(array(
	'//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js',
	'angular/controllers',
	'vendor/jquery.tagsinput',
	'tracks/create'
), array('inline' => false));
?>
<div id="inicio" ng-app="App" ng-controller="TracksController">
	<!-- <div class="row">
		<div class="col-sm-12">
			<span class="alert alert-{{mensaje.tag}} pull-left" ng-show='mensaje.text' ng-bind="mensaje.text" ng-class=""></span>
			<a href="/listado" class="btn btn-primary pull-right">
				Ver listado
			</a>
		</div>
	</div> -->
	<div class="row">
		<div class="col-sm-12">
			<span class="alert alert-{{mensaje.tag}} pull-left" ng-show='mensaje.text' ng-bind="mensaje.text" ng-class=""></span>
		</div>
	</div>
	
	<h2><?php echo __('Cargador'); ?></h2>
	<hr />
	<div class="row datos">
		<div class="col-sm-12">
			<?php echo $this->Form->create('Track', array(
				'id' => 'formulario',
				'name' => 'formulario',
				'ng-submit' => 'submit($event)'
			));
 ?>
	<!-- 
			<div class="col-sm-4">
				<div class="row">
					<input name="data[Track][catalogoId]" maxlength="255" type="text" id="TrackCatalogoId" placeholder="Catalogo ID">
				</div>
			</div> -->
			
			<div class="row">
				<?php
				echo $this->Form->input('title', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Titulo',
					'required' => 'required',
					'type' => 'text'
				));
				echo $this->Form->input('formato', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Formato: HD 1080, HD 720, SD 576',
					'type' => 'text'
				));
				echo $this->Form->input('duracion', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Duracion',
					'type' => 'text'
				));
				?>
			</div>
			<div class="row">
				<?php
				$capitulos = array();
				for ($i=0; $i < $quapitulos['Quapitulo']['title']; $i++) { 
					$capitulos[$i+1] = $i + 1;
				}
				
				echo $this->Form->input('capitulos', array(
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
				    'options' => $capitulos,
				    'empty' => '(Cantidad de Capítulos)',
				    'label' => false
				));
				echo $this->Form->input('productor', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Productor',
					'type' => 'text'
				));
				echo $this->Form->input('director', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Director',
					'type' => 'text'
				));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('mail_productor', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Mail Productor',
					'type' => 'email'
				));
				echo $this->Form->input('mail_medio', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Mail Medio',
					'type' => 'email'
				));
				echo $this->Form->input('website', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Website: http://www.ejemplo.com.ar',
					'type' => 'url'
				));
				?>
			</div>
			<div class="row">
				<?php
				echo $this->Form->input('protagonistas', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Protagonistas/Conductor/Entrevistados'
				));
				echo $this->Form->input('sinopsis', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Sinopsis/Síntesis de la noticia'
				));
				?>
				<?php
				echo $this->Form->input('Category', array(
					'autocomplete' => false,
					'class' => 'col-sm-12 form-control',
					'div' => 'col-sm-4',
					'label' => false,
					'placeholder' => 'Categorias',
					'size' => '6'
				));
				?>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<input id="tags1" class="tags" name="data[Track][tags]" value="etiqueta" type="text" />
				</div>
				<div class="col-sm-4">
					<div class="row">
						<?php
						echo $this->Form->input('entryId', array(
							'autocomplete' => false,
							'class' => 'col-sm-12 form-control',
							'ng-model' => 'entryId',
							'div' => 'col-sm-12',
							'label' => false,
							'placeholder' => 'Video ID',
							'required' => 'required'
						));
						?>
						<!-- <div class="col-sm-6">
							<a href="#videos" class="btn btn-primary pull-right">Videos &darr;</a>
						</div>
						<div>&nbsp;</div> -->
						<!-- <div class="col-sm-6">
							<div class="row">
								<?php
								// echo $this->Form->input('portadaId', array(
									// 'autocomplete' => false,
									// 'class' => 'col-sm-12 form-control',
									// 'ng-model' => 'portadaId',
									// 'div' => 'col-sm-12',
									// 'label' => false,
									// 'placeholder' => 'Portada ID'
								// ));
								?>
							</div>
						</div> -->
						<!-- <div class="col-sm-6">
							<a href="#imagenes" class="btn btn-primary pull-right">Imágenes &darr;</a>
						</div> -->
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<?php
						echo $this->Form->input('destacado', array('div' => 'col-sm-12'));
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<button class="btn col-sm-10 col-sm-offset-1" ng-hide="mensaje.text" type="submit">
					<?php echo __('Guardar'); ?>
				</button>
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

<div class="row text-center">
	<div id="kcw"></div>
</div>
<script type="text/javascript">
	var params = {
		allowScriptAccess : "always",
		allowNetworking : "all",
		wmode : "opaque"
	};
	// php to js
	var flashVars =  
 <?php echo json_encode($flashVars); ?>;

	<!-- embed flash object -->
	// swfobject.embedSWF("http://www.kaltura.com/kcw/ui_conf_id/1000740", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	// swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/11170222", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	// swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/11170253", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/11170265", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
	// swfobject.embedSWF("http://www.librekaltura.com.ar/kcw/ui_conf_id/2011401", "kcw", "680", "360", "9.0.0", "expressInstall.swf", flashVars, params);
</script>
 
<!--implement callback scripts-->
<script type="text/javascript">
	function onContributionWizardAfterAddEntry(entries) {
		// alert(entries.length + " media file/s was/were succsesfully uploaded");
		for (var i = 0; i < entries.length; i++) {
			// alert("entries["+i+"]:EntryID = " + entries[i].entryId);
			$('#TrackEntryId').val(entries[i].entryId);
			$('#TrackEntryId').trigger('input');
			$('#kcw').hide();
		}
	}
</script>
<script type="text/javascript">
	function onContributionWizardClose() {
		$('#kcw').hide();
		// alert("Thank you for using Kaltura ontribution Wizard");
	}
</script>































