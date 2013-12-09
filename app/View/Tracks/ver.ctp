<?php //debug($track) ?>

<div class="row">
	<div class="col-sm-8">
		<!-- <div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-right">
				<h4 class="category"> [ <?php //echo strtolower($track['Category'][0]['title']); ?> ] </h4>
			</div>
		</div> -->

		<!-- detalles del track -->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
						<div class="row">
							<h3> <?php echo $track['Track']['title'] ?>
							</h3>
						</div>
						<dl class="dl-horizontal">
							<dt>Formato</dt>
							<dd><?php echo $track['Track']['formato'] ?></dd>
							<dt>Capítulos</dt>
							<dd><?php echo $track['Track']['capitulos'] ?></dd>
							<dt>Duración</dt>
							<dd><?php echo $track['Track']['duracion'] ?></dd>
							<dt>Protagonistas/Conductor/Entrevistados</dt>
							<dd><?php echo $track['Track']['protagonistas'] ?></dd>
							<dt>Director</dt>
							<dd><?php echo $track['Track']['director'] ?></dd>
							<dt>Productor</dt>
							<dd><?php echo $track['Track']['productor'] ?></dd>
							<dt>Mail Productor</dt>
							<dd><?php echo $track['Track']['mail_productor'] ?></dd>
							<dt>Mail Medio</dt>
							<dd><?php echo $track['Track']['mail_medio'] ?></dd>
							<dt>Website</dt>
							<dd><?php echo $track['Track']['website'] ?></dd>
							<dt>Sinopsis/Síntesis de la noticia</dt>
							<dd><?php echo $track['Track']['sinopsis'] ?></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-sm-10">
				<?php echo $kUrlEmbed ? $kUrlEmbed : '&nbsp;'; ?>
			</div>
		</div>
	</div>
</div>
