<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Trama Audiovisual');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title> <?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?> </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array(
			'vendor/bootstrap.min',
			'layouts/default'
		));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		?>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->

		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	</head>
	<body>

		<nav class="navbar navbar-inverse" role="navigation">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://tramaaudiovisual.com.ar">Trama Audiovisual</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="/">Inicio</a>
					</li>
					<li>
						<a href="http://tramaaudiovisual.com.ar/index.php/noticias" target="_blank"> Noticias </a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Sobre Trama <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li>
								<a href="http://tramaaudiovisual.com.ar/index.php/por-que-trama" target="_blank"> ¿Por qué Trama? </a>
							</li>
							<li>
								<a href="http://tramaaudiovisual.com.ar/index.php/que-hacemos" target="_blank"> ¿Qué hacemos? </a>
							</li>
							<li>
								<a href="http://tramaaudiovisual.com.ar/index.php/quienes-somos" target="_blank"> ¿Quiénes somos? </a>
							</li>
							<li>
								<a href="http://tramaaudiovisual.com.ar/index.php/como-sumarse" target="_blank"> ¿Cómo sumarse? </a>
							</li>
							<li>
								<a href="http://tramaaudiovisual.com.ar/index.php/contactanos" target="_blank"> Contactanos </a>
							</li>
						</ul>
					</li>
					<li>
						<a href="https://www.facebook.com/TramaAudiovisual" class="no-decoration" target="_blank"> <i class="fa fa-facebook-square fa-lg"></i> </a>
					</li>
					<li>
						<a href="https://www.facebook.com/TramaAudiovisual" class="no-decoration" target="_blank"> <i class="fa fa-twitter-square fa-lg"></i> </a>
					</li>
					<li>
						<a href="http://tramaaudiovisual.com.ar/index.php/contactanos" class="no-decoration" target="_blank"> <i class="fa fa-envelope fa-lg"></i> </a>
					</li>
				</ul>

				<!-- Navbar Right -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Buscar -->
					<form action="/tracks/search" class="navbar-form navbar-left" method="get" role="search">
						<div class="form-group">
							<input type="text" name="q" class="form-control" placeholder="<?php echo __('Buscar'); ?>">
						</div>

						<div class="form-group">
							<div class="checkbox">
								<label>
									<!-- <input type="checkbox"> Remember me -->
									<input type="checkbox" name="c" value="1"> Categorías
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<!-- <input type="checkbox"> Remember me -->
									<input type="checkbox" name="t" value="1"> Etiquetas
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<!-- <input type="checkbox"> Remember me -->
									<input type="checkbox" name="u" value="1"> Usuarios
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-default">
							<?php echo __('Buscar'); ?>
						</button>
					</form>

					<!-- Login -->
					<?php if (AuthComponent::user('name') != ''): ?>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo AuthComponent::user('name'); ?>
						<b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li>
								<a href="/tracks/create"> <?php echo __('Nuevo Video'); ?> </a>
							</li>
							<li>
								<a href="/tracks"> <?php echo __('Listar Videos'); ?> </a>
							</li>
							<li>
								<a href="/users/logout"> <?php echo __('Salir'); ?> </a>
							</li>
						</ul>
					</li>

					<?php else: ?>
					<li>
						<?php
						echo $this->Html->link(__('Ingresar'), array(
							'controller' => 'users',
							'action' => 'login'
						), array('id' => 'menu_superior_derecha_verde'));
						?>
					</li>
					<?php endif; ?>

				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

		<div class="container">

			<!-- Logo -->
			<div class="row">
				<div class="col-sm-12">
					<img class="img-responsive logo-superior" src="/img/logos/bannerTrama.png" />
				</div>
			</div>

			<?php echo $this->fetch('content'); ?>

		</div>

		<!-- footer -->
		<footer class="navbar-inverse">

			<!-- Logos de auspiciantes -->
			<div class="row auspiciantes">
				<div class="col-sm-1 col-sm-offset-4 text-center">
					<?php
					echo $this->Html->link($this->Html->image('logos/usinademedios.png', array(
						'alt' => 'Usina de Medios',
						'border' => '0',
						'class' => 'img-responsive'
					)), 'http://www.usinademedios.org.ar/', array(
						'escape' => false,
						'target' => '_blank'
					));
					?>
				</div>
				<!-- Descomentar si se quiere el logo de TDA de vuelta -->
				<!-- ojo con el col-sm-2 que también se comenta -->
				<!--
				<div class="col-sm-2 text-center">
				<?php
				// echo  $this->Html->image('logos/Ausp-TDA-120.png'
				//	, array('alt' => 'tda', 'border' => '0'));
				?>
				</div>
				<div class="col-sm-2 text-center">
				-->
				<div class="col-sm-2 col-sm-offset-2 text-center">
					<?php
					echo $this->Html->link($this->Html->image('logos/geomedio.png', array(
						'alt' => 'GeoMedio',
						'border' => '0',
						'class' => 'img-responsive'
					)), 'http://www.geomedio.com.ar/', array(
						'escape' => false,
						'target' => '_blank'
					));
					?>
				</div>
			</div>
		</footer>

		<?php echo $this->element('sql_dump'); ?>

		<?php
		echo $this->Html->script(array(
			'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
			'vendor/bootstrap.min'
		));
		echo $this->fetch('script');
		?>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-27799433-9', 'distribucionfederal.com.ar');
			ga('send', 'pageview');

		</script>
	</body>
</html>
