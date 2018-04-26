<div class="publicaciones content">
	<section class="banner img-bg bg-black-alpha" data-bg="<?= $this->Url->image('testbg.png'); ?>">
		<div class="container">
			<h2>Informe de desaparici&oacute;n forzada en Nuevo Le&oacute;n de 2009 a 2016</h2>
			<a href="publicaciones/desapariciones-nl-2009-a-2016.pdf" download class="btn bg-purple2">Descarga el reporte</a>
		</div>
	</section>
	<div class="container">
		<div class="smaller-container">
			<h1 class="mb-4 mb-md-5">Publicaciones</h1>
			<div class="pubslist">
				<?php foreach($publicaciones as $publicacion):?>
					<article class="publication">
						<div class="row">
							<div class="col-md-3 d-none d-md-block">
								<?= $this->Html->image($publicacion->image_url, ['alt' => $publicacion->title]); ?>
							</div>
							<div class="col-md-9">
								<p class="date ttu"><?= $publicacion->created->nice('America/Monterrey', 'es-ES'); ?></p>
								<h3 class="title"><?= $publicacion->title; ?></h3>
								<p class="extract"><?= $publicacion->body; ?></p>
								<?= $this->Html->link('Descargar reporte', '/'.$publicacion->attachment_url, ['class' => 'btn download-report btn-primary bg-lightgreen', 'download' => true, 'escape' => false]); ?>
							</div>
						</div>
						<hr>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</div>	
</div>
<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700" rel="stylesheet"> 
