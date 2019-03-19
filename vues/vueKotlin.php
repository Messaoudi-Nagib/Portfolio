<?php $titre = 'Veille Kotlin'; ?>
<?php $bg = 'canvas'; ?>
<?php ob_start() ?>


<div class="row mt-5">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >


		<div class="card">
			<div class="card-body">
				<div class="card-text">
					<div class="media">
						<div class="media-left">
							<img src="img/kotlin.png" class="rounded" width="80" height="80">
						</div>
						<h2>
							Qu'est ce que Kotlin ?
						</h2>
					</div>

						<p class="mt-5" style="text-indent: 75px;">
							Créé par la firme <strong>Jetbrains</strong>, Kotlin est un langage de programmation open source créé en 2011 et <strong>supporté par Google</strong> depuis 2017.<br/>
							Il est annoncé comme étant le second langage de programmation pour le développement Android.
							Depuis, Kotlin connait de plus en plus de succès, et ce pour certains des points suivants :

						</p>

					<img class="responsive rounded mx-auto d-block"" src="img/kotlinhelp.png"/>
					<p class="mt-2">
						<em>Source de l'image : https://cdn.programiz.com/sites/tutorial2program/files/kotlin.jpg</em>
					</p>
					<p>
						<a href="https://codelabs.developers.google.com/codelabs/build-your-first-android-app-kotlin/index.html?index=..%2F..index#0" target="_blank" class="hvr-bounce-in mx-auto" style="text-decoration: none" >Tutorial Kotlin</a>
					</p>

				</div>
			</div>
		</div>
	</div>
</div>


<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>

