<!DOCTYPE html>
<html lang="es">
<head>
	<?php $this->Html->charset(); ?>
	<?= $this->Html->meta(
		'viewport',
		'width=device-width, initial-scale=1, shrink-to-fit=no'
		);
	?>
	<title>CADHAC</title>

	<?= $this->Html->css(['bootstrap-grid.min.css', 'bootstrap-reboot.min.css', 'bootstrap.min.css', 'style.css']) ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet"> 
	
	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
</head>
<body>
	<header class="main">
		<div class="container ">
			<div class="row">
				<div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-start">
					<?= $this->Html->link(
						$this->Html->image('cadhaclogo.svg', ['alt' => 'CADHAC']),
						'/',
						['class' => 'logo', 'escape' => false]	
					); ?>
				</div>
				<div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end mt-4 mt-sm-0">
					<div class="row align-items-center">
						<?= $this->Html->link('Dona', '/donaciones', ['class' => 'btn bg-accent ttu']);?>
					</div>
				</div>
			</div>
		</div>
		<section class="main-nav">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-light navbar-expand-lg">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<?= $this->Html->link('Inicio', '/', ['class' => "nav-item nav-link ttu"]);	?>
								<?= $this->Html->link('Sobre nosotros', '/aboutus', ['class' => "nav-item nav-link ttu"]); ?>
								<?= $this->Html->link('Qué hacemos', '/quehacemos', ['class' => "nav-item nav-link ttu"]); ?>
								<?= $this->Html->link('Comunicados', '/comunicados', ['class' => "nav-item nav-link ttu"]); ?>
								<?= $this->Html->link('Publicaciones', ['controller' => 'Posts', 'action' => 'publicaciones'], ['class' => "nav-item nav-link ttu"]); ?>
								<?= $this->Html->link('Desaparecidos', '/desaparecidos', ['class' => "nav-item nav-link ttu"]); ?>
								<?= $this->Html->link('Contacto', '/contact', ['class' => "nav-item nav-link ttu"]); ?>
							</div>
						</div>
					</nav>
				</div>	
			</div>
		</section>
	</header>
	

<?= $this->fetch('content') ?>

<footer>
	<?php if(!strpos($_SERVER['SCRIPT_FILENAME'], 'donaciones')): ?>
		<section class="unete">
			<div class="container-fluid nospace">
				<div class="row">
					<div class="col-md-5 img-bg d-none d-md-block" data-bg="<?= $this->Url->image('unete.jpg'); ?>">
					</div>
					<div class="col-md-7 bg-primary">
						<div class="padthis">
							<h2 class="flight">&Uacute;nete</h2>
							<p class="light">Nuestra misi&oacute;n es favorecer una cultura de respeto a los Derechos Humanos de todas las personas en el estado de Nuevo Le&oacute;n, sin discriminaci&oacute;n alguna.</p>
							<p class="light">Ay&uacute;danos a cumplirla: invol&uacute;crate, s&eacute; voluntario, o convi&eacute;rtete en donante.</p>
							<?= $this->Html->link('<strong>Dona</strong>', '/donaciones', ['class' => 'btn bg-lightgreen btn-lg ttu donate-link', 'escape' => false]); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	
	<section class="contacto py-5 py-sm-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1>Recibe nuestras actualizaciones sobre derechos humanos y CADHAC.</h1>
					<div class="row">
						<div class="col-xl-6 col-sm-12">
							<div class="input-group mb-5">
								<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Correo electr&oacute;nico">
								<div class="input-group-append">
									<button class="btn bg-lightgreen" type="button">Suscribirse</button>
								</div>
							</div>
						</div>
					</div>
		
					<?= $this->Html->link('Cont&aacute;ctanos', '/contact', ['class' => 'mr-5', 'escape' => false]); ?>
					<a href="#">Pol&iacute;tica de Privacidad</a>
					<p class="dir"><span style="font-weight: 600;">Ciudadanos en Apoyo a los Derechos Humanos A.C.</span> | Vancouver 156, Col. Vista Hermosa, Monterrey NL M&eacute;xico | (81) 83435058</p>
				</div>
	
				<div class="col-md-3 mt-5">
					<div class="row justify-content-center justify-content-xl-end">
						<a class="social-media" target="_blank" href="https://www.facebook.com/cadhac/">
						<?= $this->Html->image('facebook-logo.svg', ['alt' => 'Facebook'])?></a>
						<a class="social-media" target="_blank" href="https://twitter.com/cadhac"><?= $this->Html->image('twitter-logo.svg', ['alt' => 'Twitter']) ?></a>
						<a class="social-media" target="_blank" href="https://www.youtube.com/user/CADHAC/featured"><?= $this->Html->image('youtube-logo.svg', ['alt' => 'Youtube']) ?></a>
					</div>
					<div class="row justify-content-center justify-content-xl-end">
						<?= $this->Html->link(
							$this->Html->image('cadhaclogo.svg', ['alt' => 'CADHAC']),
							'/',
							['class' => 'logo', 'id' => 'bottomlogo', 'escape' => false]	
						); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<?= $this->Html->script('bundle');?>
</body>
</html>