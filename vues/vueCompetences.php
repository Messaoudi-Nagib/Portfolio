<?php $titre = 'Compétences' ?>
<?php $bg = "comp" ?>
<?php ob_start(); ?>



	<style>
		@import url('https://fonts.googleapis.com/css?family=Lilita+One');
	</style>
	<div class="row">
		<div class="titlec col-12  mt-4">
			<h1 class="has-text-centered" style="font-family: 'Lilita One', cursive;
; font-size: 50px">Compétences</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="card mt-5">
				<div class="card-body">
					<div class="card-title">
						<h2 class="title-comp">Mes compétences :</h2></div>
					<hr class
					"my-4">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h4 class="souti mt-5 mb-2 d-flex justify-content-center">Langages :</h4>
						<h2 class="souti"><i class="fab fa-php fa-3x mb-2"></i>Php</h2>

						<div class="progress mt-3">
							<div id="prog" class="progress-bar" role="progressbar" style="width: 50%; background-color: background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.6502976190476191) 1%, rgba(255,141,191,0.7175245098039216) 79%);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
						<h2 class="souti"><i class="fab fa-python fa-3x mb-2"></i>Python</h2>
						<div class="progress mt-2">
							<div class="progress-bar" role="progressbar" style="width: 65%; background-color: background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.6502976190476191) 1%, rgba(255,141,191,0.7175245098039216) 79%);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h4 class="souti mt-5 mb-2 d-flex justify-content-center">Base de données :</h4>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
							<h2 class="souti"><i class="fas fa-database fa-3x mb-2"></i> MySQL </h2>
							<div class="progress mt-2">
								<div class="progress-bar" role="progressbar" style="width: 60%; background-color: background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.6502976190476191) 1%, rgba(255,141,191,0.7175245098039216) 79%);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h4 class="souti mt-5 mb-2 d-flex justify-content-center">Frameworks :</h4>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">

							<h2 class="souti"><i class="fab fa-laravel fa-3x"></i> <a href="page-veille" style="color: #4a4a4a;"> Laravel </a></h2>
							<div class="progress mt-2">
								<div class="progress-bar" role="progressbar" style="width: 40%; background-color: background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.6502976190476191) 1%, rgba(255,141,191,0.7175245098039216) 79%);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>

						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
							<h2 class="souti"><i class="fab fa-angular fa-3x mb-2"></i>Angular 2</h2>
							<div class="progress mt-2">
								<div class="progress-bar" role="progressbar" style="width: 25%; background-color: background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.6502976190476191) 1%, rgba(255,141,191,0.7175245098039216) 79%);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<h4 class="souti mt-5"><u>CMS</u> : </h4>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mb-4">
							<h2 class="souti"><i class="fab fa-wordpress fa-3x mb-2"></i>Wordpress</h2>
							<div class="progress mt-2">
								<div class="progress-bar" role="progressbar" style="width: 70%; background-color: background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.6502976190476191) 1%, rgba(255,141,191,0.7175245098039216) 79%);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
			<div class="card">
				<div class="card-body">
					<h2 class="titlec">Mes formations :</h2>
					<hr class
					"my-4">
					<div class="col-12">
						<p class="souti is-size-4">
							<i class="fas fa-graduation-cap fa-3x"></i> Bac Scientifique mention Bien .
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-2">
			<div class="card">
				<div class="card-body">
					<h2 class="titlec ">Environnement de développement : </h2>
					<hr class
					"my-4">
					<div class="row mt-4">
						<div class="col-6 has-text-centered">
							<img class="ico" src="img/ubuntu.png" width="100" height="100">
							<h4 class="souti mt-2">Ubuntu 18</h4>
						</div>
						<div class="col-6 has-text-centered">
							<img class="ico rounded" src="img/windows.jpg" width="100" height="100">
							<h4 class="souti mt-2">
								Windows 10
							</h4>
						</div>

					</div>
					<div class="row mt-4">
						<div class="col-6 has-text-centered">
							<img class="ico" src="img/intellij.png" width="100" height="100">
							<h4 class="souti mt-2">IntelliJ Idea</h4>
						</div>
						<div class="col-6 has-text-centered">
							<img class="ico" src="img/netbeans.png" width="100" height="100">
							<h4 class="souti mt-2">
								Netbeans IDE 10.0
							</h4>
						</div>

					</div>

					<div class="row mt-4">
						<div class="col-6 has-text-centered">
							<img class="ico" src="img/vbox.png" width="100" height="100">
							<h4 class="souti mt-2">VirtualBox</h4>
						</div>
						<div class="col-6 has-text-centered">
							<img class="ico" src="img/github.png" width="100" height="100">
							<h4 class="souti mt-2">
								Github
							</h4>
						</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-2 ">
			<div class="card-ctm card">
				<div class="card-body">
					<h2 class="titlec">
						Expérience professionnelle :
					</h2>
					<hr class
					"my-4">

					<div class="row mt-5">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<h2 class="souti has-text-centered">
								Déménagement Beaulaigue <i class="fas fa-box-open"></i>
							</h2>
							<p class="is-size-4 has-text-centered">Entreprise de déménagements basée sur Saint-Etienne (Job étudiant/ saisonnier). </p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<h2 class="souti has-text-centered">
								Stage de 1ère année au Cdos 42 <i class="fas fa-bicycle"></i>
							</h2>
							<p class="is-size-4 has-text-centered">
								J'ai effectué mon stage de première année au sein du Comité Départemental Olympique et Sportif de la Loire. J'ai réalisé un site vitrine à l'aide du CMS Wordpress.
								Vous pouvez retrouver le site final <a href="http://cdos42.fr" target="_blank">ici</a>
							</p>

						</div>
					</div>
					<div class="row mt-2 ml-2 mb-2">
						<h2 class="souti has-text-centered mb-4">Stage 2ème année : Apsaroke</h2>
						<p class="is-size-4" style="text-indent: 75px">
							Entreprise située à Lyon, Apsaroke réalise des préstations de services dans le domaine informatique. Elle envoit ses collaborateurs en mission chez les clients.
							J'ai effectué un stage de 6 semaines au sein de l'équipe, et j'ai pu réaliser des modifications sur l'outil de gestion de l'entreprise.
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
	$(document).ready( function(){
	    $('.progress-bar').fadeIn("slow");
    });

</script>

<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>