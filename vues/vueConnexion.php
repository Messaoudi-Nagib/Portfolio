<?php $titre = 'Connexion' ?>
<?php $bg = 'stage' ?>
<?php ob_start() ?>
	<div class="row">
		<div class="titlec col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 ">
			<h1>
				Connexion à l'espace membre :
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="titlec col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-3 offset-lg-3 mt-3 ">
			<form method="post" action="index.php">

				<div class="form-group mt-5"
				">
				<label for="exampleInputEmail1">Pseudooo </label>
				<input class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Entrer le pseudo" name="pseudo">
				<small id="emailHelp" class="form-text text-muted" style="font-size: 20px">Nous ne partagerons pas vos infos.</small>
			</form>
			<div class="form-group mt-2">
				<label for="exampleInputPassword1">Mot d'passe chef</label>
				<input type="password" class="form-control" id="mdp" placeholder="Mot de passe, s'il vous plaît..." name="mdp">
			</div>
			<button type="submit" class="button is-dark is-outlined mt-4">Envoyer</button>
			</form>
		</div>
	</div>
	</div>
<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>