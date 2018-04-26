<div class="content home">

	<div id="sliderhome" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#sliderhome" data-slide-to="0" class="active"></li>
			<li data-target="#sliderhome" data-slide-to="1"></li>
			<li data-target="#sliderhome" data-slide-to="2"></li>
			<li data-target="#sliderhome" data-slide-to="3"></li>
			<li data-target="#sliderhome" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<?= $this->Html->image('banner-1.jpg', ['alt' => "First slide", 'class' => 'd-block w-100']); ?>
			</div>
			<div class="carousel-item">
			<?= $this->Html->image('banner-2.jpg', ['alt' => "Second slide", 'class' => 'd-block w-100']); ?>
			</div>
			<div class="carousel-item">
			<?= $this->Html->image('banner-3.jpg', ['alt' => "Third slide", 'class' => 'd-block w-100']); ?>
			</div>
			<div class="carousel-item">
			<?= $this->Html->image('banner-4.jpg', ['alt' => "Forth slide", 'class' => 'd-block w-100']); ?>
			</div>
			<div class="carousel-item">
			<?= $this->Html->image('banner-5.jpg', ['alt' => "Fifth slide", 'class' => 'd-block w-100']); ?></div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- <section class="banner img-bg bg-purple-alpha" data-bg="img/banner1.jpg">
		<div class="container">
			<h1 class="tac" style="width: 60%; margin: 0 auto;">&iexcl;Celebra con nosotros nuestro 25 Aniversario!</h1>
		</div>
	</section> -->
	<section class="one">
		<div class="container">
			<h2 class="title tac">En CADHAC, defendemos los Derechos Humanos</h2>
			<div class="smaller-container secondary">
				<div class="row">
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/icon2.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Seguridad</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/icon4.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Derechos Humanos</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/icon5.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">B&uacute;squeda de personas</a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/tmpicon.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Acompa&ntilde;amiento a familiares</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/icon1.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Asesor&iacute;a Jur&iacute;dica</a>
					</div>
					<div class="col">
						<a href="#"><i class="ico">
							<img src="img/icon3.svg" alt="TmpIcon">
						</i></a>
						<a href="#" class="label">Penitenciario</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="two noticias d-none">
		<h2 class="tac">Noticias</h2>
		<div class="container newsgrid">
			<?php for($i = 0; $i < 2; $i++): ?>
			<div class="row">
				<div class="col-md-6">
					<article class="nota">
						<figure class="article-img">
							<a href="#"><img class="img-fluid" src="img/pexels.jpg" alt="Titulo de la nota"></a>
						</figure>
						<figcaption>
							<h3 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quos quasi placeat fugit doloribus voluptates.</a></h3>
							<a href="#" class="date">15 de enero de 2018</a>
						</figcaption>
					</article>
				</div>
				<div class="col-md-3">
					<article class="nota">
						<figure class="article-img">
							<a href="#"><img class="img-fluid" src="img/news-entry.jpg" alt="Titulo de la nota"></a>
						</figure>
						<figcaption>
							<h3 class="title"><a href="#">Participaci&oacute;n en seminario de desaparici&oacute;n</a></h3>
							<a href="#" class="date">15 de enero de 2018</a>
						</figcaption>
					</article>
				</div>
				<div class="col-md-3">
					<article class="nota">
						<figure class="article-img">
							<a href="#"><img class="img-fluid" src="img/news-entry.jpg" alt="Titulo de la nota"></a>
						</figure>
						<figcaption>
							<h3 class="title"><a href="#">Participaci&oacute;n en seminario de desaparici&oacute;n</a></h3>
							<a href="#" class="date">15 de enero de 2018</a>
						</figcaption>
					</article>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</section>
</div>
