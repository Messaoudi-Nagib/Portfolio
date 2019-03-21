<?php $titre = 'Accueil' ?>
<?php $bg = "canvas" ?>
<?php ob_start(); ?>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Lilita+One');
	</style>
<div class="row">
	<div class="titlec col-12  mt-4">
		<h1 class="has-text-centered" style="font-family: 'Lilita One', cursive;
; font-size: 50px">Bienvenue sur mon Portfolio</h1>
	</div>
</div>
<div class="row mt-3">
	<div class="mx-auto mt-5">
		<img src="img/nag.jpg" width="200" height="200" alt="..." class="rounded-circle shadow">
	</div>
</div>
<div class="row mt-3">
	<div class="tile is-parent is-vertical">
		<div class="tile is-child notification is-grey shadow">
			<article class="tile is-child notification is-grey">
				<p class="title is-size-4">
					Bienvenue sur mon portfolio ! J'y rassemble ici toutes les informations concernant mon parcours professionnel, mes veilles technologiques, mes passions...
				</p>
			</article>
		</div>
		<div class="tile is-child notification is-dark shadow">
			<article class="tile is-child notification is-dark">
				<p class="title is-size-3">
					Messaoudi Nagib, étudiant en 2ème année de <strong>BTS Services Informatiques aux Organisations</strong> à Saint-Etienne.
				</p>
			</article>
		</div>
		<div class="tile is-child notification is-grey shadow">
			<article class="tile is-child notification is-grey is-full">
				<p class="title">
					Ce que j' <i class="title-flotte far fa-heart"></i> :
				</p>
				<p class="tile-body is-size-4"><i class="fas fa-music fa-2x"></i> Création de musiques et <a href="https://fr.wikipedia.org/wiki/Musique_assist%C3%A9e_par_ordinateur" target="_blank">MAO</a>  </p>
				<hr class"my-4">
				<p class="tile-body is-size-4"><i class="fas fa-basketball-ball fa-2x"></i> Basketball </p>
				<hr class"my-4">
				<p class="tile-body is-size-4"><i class="fas fa-code fa-2x"></i> Code </p>
			</article>
		</div>
		<div class="tile is-child notification is-dark shadow">
			<article class="tile is-child notification is-dark">
				<p class="title is-size-3">
					Visualiser mon diapo : <a href="" target="_blank" class="hvr-shutter-out-horizontal mx-auto" style="text-decoration: none" >Slides</a>
				</p>
			</article>
		</div>
	</div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>