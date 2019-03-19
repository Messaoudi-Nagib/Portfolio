<?php $titre = 'Contact'; ?>
<?php $bg = 'contact' ?>
<?php ob_start(); ?>
<style>
	a {
		color: #16111d;
	}
	/* CSS link color */
</style>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Lilita+One');
	</style>
	<div class="row">
		<div class="titlec col-12  mt-4">
			<h1 class="has-text-centered" style="font-family: 'Lilita One', cursive;
; font-size: 50px">Contact</h1>
		</div>
	</div>
<div class="row">
	<div class="col-xs-6 col-md-6 col-lg-4 mx-auto mt-4 has-text-centered">
		<div class="card">
			<div class="card-body">
				<a href="https://www.linkedin.com/in/nagib-messaoudi-490457158/" target="_blank"><i class="fab fa-linkedin fa-lg fa-stack fa-5x"></i><h4 class="souti">Linkedin</h4></a>
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-md-6 col-lg-4 mx-auto mt-4 has-text-centered">
		<div class="card">
			<div class="card-body">
				<a href="https://github.com/Messaoudi-Nagib" target="_blank"><i class="fab fa-github fa-lg fa-stack fa-5x"></i><h4 class="souti">Github</h4></a>
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-md-6 col-lg-4 mt-4">
		<div class="card">
			<div class="card-body has-text-centered">
				<i class="fas fa-at fa-lg fa-stack fa-5x" style="color:#16111d "></i>
				<h5 class="souti">nagib.messaoudi@gmail.com</h5>
			</div>
		</div>
	</div>
</div>
<div class="row" style="margin-top: 30px; margin-bottom: 60px">
	<div class="col-xs-6 col-md-12 col-lg-12 mt-4">
		<div class="card">
			<div class="card-body" >
				
				<p class="is-size-4 has-text-centered align-middle pt-2">
					<i class="logo fas fa-map-marker-alt fa-2x" style="color:#16111d "></i>
					<strong>Saint-Etienne / Lyon</strong> possibilité de se déplacer en <strong>Région Rhône-Alpes.</strong>
					
				</p>
			</div>
		</div>
	</div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require('template.php');