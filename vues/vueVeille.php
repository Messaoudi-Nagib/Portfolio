<?php $titre = 'Veille Technologique' ?>
<?php $bg = 'veille' ?>
<?php ob_start() ?>


	<style>
		@import url('https://fonts.googleapis.com/css?family=Lilita+One');
	</style>
	<div class="row">
		<div class="titlec col-12  mt-4">
			<h1 class="has-text-centered" style="font-family: 'Lilita One', cursive;
; font-size: 50px">Mes veilles technologiques</h1>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
			<h2 class="titlec">Laravel</h2>
			<div class="card mt-5" style="margin-bottom: 80px">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<img src="img/larav.png" width="80" height="80">
						</div>
						<div class="media-content">
							<p class="title is-4">Laravel Bestmomo <span class="badge badge-pill badge-dark">#Laravel</span></p>
						</div>
						<div class="media-right" style="margin-right: 20px;">
							<a href="https://github.com/Messaoudi-Nagib/BestmomoTypeCameras" target="_blank"><i class="fab fa-github fa-3x"></i></a>
							<p></p>
						</div>
					</div>
					<hr class="my-4">
					<div class="content is-size-5">
						Mise en place de la plateforme d'examen :
						<p>
						<ul>
							<li> Laravel 5.7 sur machine virtuelle</li>
							<li> Dépot de ressources Github</li>
							<li> Création des "Types de caméras" (<em>module supplémentaire permettant d'ajouter des types de caméras chaque image, sur le site existant</em>)</li>
							<li> Utilisation de l'<em>ORM</em> pour la gestion de la base de donnée.</li>
						</ul>
						</p>
					</div>
					<hr class
					"my-4">
					<div class="content is-size-5">
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="rounded d-block w-80" src="img/screen1.png" alt="Laravel" style="height: 250px">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-80" src="img/screen2.png" style="height: 250px">
								</div>
								<div class="carousel-item">
									<img class="rounded d-block w-80" src="img/screen3.png" alt="Laravel" style="height: 250px">
								</div>
							</div>
						</div>

					</div>
				</div>


			</div>
		</div>


		<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
			<h2 class="titlec"><a href="page-kotlin" style="text-decoration: none">Kotlin</a></h2>
			<div class="card mt-5" style="margin-bottom: 80px">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<img src="img/kotlin.png" class="rounded" width="80" height="80">
						</div>
						<div class="media-content">
							<p class="title is-4">Kotlin <span class="badge badge-pill badge-dark">#Kotlin</span></p>
						</div>
					</div>
					<hr class="my-4">
					<div class="content is-size-5">
						Veille technologique à propos du nouveau langage Kotlin
						<p>

						</p>
					</div>


				</div>
			</div>


			<div class="row align-items-end  ">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 " style="height:450px">
					<h2 class="titlec"><a href="page-js" style="text-decoration: none">Js / Jquery </a></h2>
					<div class="card mt-5" >
						<div class="card-content">
							<div class="media">
								<div class="media-left">
									<img src="img/js.png" class="rounded" width="80" height="80">
								</div>
								<div class="media-content">
									<p class="title is-4">Javascript / Jquery <span class="badge badge-pill badge-dark">#Js</span></p>
								</div>
							</div>
							<hr class="my-4">
							<div class="content is-size-5">
								Javascript / Jquery
								<p>

								</p>
							</div>
						</div>


					</div>


				</div>

			</div>
		</div>
	</div>

<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>