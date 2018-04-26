<div class="news container">
	<div class="smaller-container" style="width: 95%">
		<div class="row">
			<div class="col-lg-8 entry pr-5">
				<div class="top">
					<h1 class="title"><?= $comunicado->title; ?></h1>
					<p class="date"><?= $comunicado->created->nice('America/Monterrey', 'es-ES'); ?></p>
				</div>
				<?= $this->Html->image($comunicado->image_url, ['alt' => $comunicado->title]); ?>
				<div class="body">
					<p> <?= $comunicado->body; ?></p>
				</div>
			</div>
			<div class="col-lg-4 more-news mt-5 mt-lg-0">
				<div class="similar">
					<h5>M&aacute;s sobre</h5>
					<?php for($i = 0; $i < 3; $i++): ?>
						<div class="row align-items-center news-preview">
							<div class="col-sm-5" >
								<a href="#"><img src="img/news-preview.jpg" alt="" class="preview"></a>
							</div>
							<div class="col-sm-7">
								<a href="#" class="date">28 de marzo de 2018.</a><br>
								<a href="#" class="title">CADHAC celebra 25 años</a>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<section class="popular-content mt-5">
					<nav class="mb-4">
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lo m&aacute;s visto</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Lo m&aacute;s compartido</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<?php for($i = 0; $i < 5; $i++): ?>
								<div class="row align-items-center news-preview">
									<div class="col-sm-5" >
										<a href="#"><img src="img/news-preview.jpg" alt="" class="preview"></a>
									</div>
									<div class="col-sm-7">
										<a href="#" class="date">28 de marzo de 2018.</a><br>
										<a href="#" class="title">CADHAC celebra 25 años</a>
									</div>
								</div>
							<?php endfor; ?>
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<?php for($i = 0; $i < 2; $i++): ?>
								<div class="row news-preview">
									<div class="col-sm-5" >
										<a href="#"><img src="img/news-preview.jpg" alt="" class="preview"></a>
									</div>
									<div class="col-sm-7">
										<a href="#" class="date">28 de marzo de 2018.</a>
										<a href="#" class="title">CADHAC celebra 25 años</a>
									</div>
								</div>
							<?php endfor; ?>
							
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

</div>
