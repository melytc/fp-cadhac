<?php //debug($comunicados);
//die();
?>
<div class="comunicados content">
	<div class="container">
		<h1>Comunicados</h1>
		<div class="row">
			<div class="col-lg-9 bloglist pr-md-5">
				<?php foreach($comunicados as $comunicado):?>
					<article class="_s-post">
						<div class="row">
							<div class="col-md-3">
								<?= $this->Html->link(
									$this->Html->image($comunicado->image_url, ['alt' => $comunicado->title]),
									'#',
									['class' => "post-img", 'escape' => false]
								);?>
							</div>
							<div class="col-md-9">
								<?= $this->Html->link($comunicado->created->nice('America/Monterrey', 'es-ES'), '#', ['class' => 'date']); ?>
								<h2 class="title"><?= $this->Html->link($comunicado->title, '#'); ?></h2>
								<p class="extract"> <?= $comunicado->body; ?></p>
								<?= $this->Html->link('Leer m&aacute;s', '#', ['class' => 'readmore', 'escape' => false]); ?>
							</div>
							<hr>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
			<div class="col-lg-3">
				<aside class="sidebar">
					<section class="search">
						<?= $this->Form->create(null, ['url' => ['controller' => 'Posts', 'action' => 'searchcomunicados'], 'type' => 'get']); ?>
						<?= $this->Form->control('q', ['label' => false]); ?>
						<?= $this->Form->button('Buscar', ['class' => 'submit btn bg-lightgreen']) ?>
						<?= $this->Form->end(); ?>
					</section>
					<section class="category-filter">
						<p class="label">Categor&iacute;as</p>
						<select name="cat" id="cat">
							<option selected value="">Todas</option>
						</select>
					</section>
					<section class="archive">
						<p class="label">Archivo</p>
						<ul>
							<li>
								2018
								<ul>
									<li><a href="#">Enero</a></li>
									<li><a href="#">Febrero</a></li>
									<li><a href="#">Marzo</a></li>
									<li><a href="#">Abril</a></li>
									<li><a href="#">Mayo</a></li>
									<li><a href="#">Junio</a></li>
									<li><a href="#">Julio</a></li>
									<li><a href="#">Agosto</a></li>
									<li><a href="#">Septiembre</a></li>
									<li><a href="#">Octubre</a></li>
									<li><a href="#">Noviembre</a></li>
									<li><a href="#">Diciembre</a></li>
								</ul>
							</li>
						</ul>
					</section>
					<section class="newsletter">
						<p class="label">Newsletter</p>
						<p class="desc">Recibe nuestros comunicados en tu correo electr&oacute;nico:</p>
						<form action="#" class="newsletter-form">
							<input type="email" name="email" id="email" placeholder="Correo electr&oacute;nico">
							<button type="submit" class="btn bg-lightgreen">Suscribirse</button>
						</form>
					</section>
				</aside>	
			</div>
		</div>
	</div>	
</div>
