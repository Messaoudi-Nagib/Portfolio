<?php $titre = 'Javascript / Jquery'; ?>
<?php $bg = 'veilleJs' ?>
<?php ob_start() ?>

<style>
	@import url('https://fonts.googleapis.com/css?family=Lilita+One');
</style>
<div class="row">
	<div class="titlec col-12  mt-4">
		<h1 class="has-text-centered" style="font-family: 'Lilita One', cursive;
; font-size: 50px">Javascript & Jquery</h1>
	</div>
</div>
<div class="row">

</div>
<div class="row">
	<div class="col-xs-12 col-md-10 col-sm-10 col-lg-12">
		<div class="card">
			<div class="card-title">
				<h4 class="titlec mt-3 ml-2">Javascript :</h4>
				<div class="card-body">

					<h2 class="text-muted">Présentation :</h2>
					<p class="mt-3" style="text-indent: 75px">
						Javascript est un <strong>langage de programmation</strong> créé en 1995 par <strong>Brendan Eich</strong> et qui est apparu pour la première fois dans en <strong>1996</strong>
						dans le navigateur <strong>Netscape Navigator</strong>, qui sert à dynamiser les pages web, créer des animations complexes et gérer le contenu de la page en temps réel.</p>

					<p class="mt-3" style="text-indent: 75px">
						Avec HTML et CSS, <strong>Javascript est un constituant essentiel des sites Web 2.0.</strong> La majorité des navigateurs web ont un <strong>moteur dédié</strong> capable d'interpreter le code Javascript.

						Il est orienté client mais récemment, Javascript est utilisé coté serveur grâce à nodeJs, que nous n'aborderons pas dans cette veille.
					</p>
					<hr class="my-4">
					<h2 class="text-muted">Utilisation :</h2>
					<p class="mt-3">
						-Fonctionnalités de base des langages de programmation : opérateurs logiques, boucles, fonctions, conditions...

					</p>
					<p class="mt-3">
						-Interactions avec le DOM ( document object model) pour les transitions, animations


					</p>
					<p class="mt-3">
						-Gestion des éléments d'une page dynamiques grâce aux selecteurs : <strong>getElementById, getElementByTagName, getElementByClassName...</strong>

					</p>

					<p class="mt-3 text-muted">
						<em>Javascript dispose de nombreuses librairies le rendant toujours plus utile :</em></p>
					<p class="mt-3">

						-<strong>Ajax</strong> (Asynchronous JavaScript And XML) pour les requêtes asynchrones,j'ai pu utiliser cette technologie à la toute fin de mon stage .</p>
					<p class="mt-3">
						-<strong>Jquery</strong> (suite de la veille).
					</p>

					<p class="mt-3">
						-<strong>JSON</strong> (Javascript Object Notation) permet la représentation de l'information structurée sous forme de tableau clé/valeur.
					</p>

					<p class="mt-3 text-muted">
						<em>Nombreux Frameworks : </em>
					</p>
					<p class="mt-3">
						-React + node.js <em class="text-muted"> (qui sont d'ailleurs beaucoup demandé par les employeurs).</em><br/>
						-Angular.js, Vue.js, Electron.js...<br/>
						-Py5.js (exemple ci-dessous)
					</p>
					<div id="effects is-centered" class="effects">
						<a href="page-sandbox" class="hvr-grow-rotate" style="text-decoration: none">Demo Sandbox</a>
					</div>


					<p><em>Exemple de programme réalisé avec py5.js, un framework de javascript permettant un rendu graphique facile d'utilisation </em></p>
					<hr class="my-4">
					<h2 class="text-muted">Utilité durant mon stage :</h2>
					<p class="mt-3" style="text-indent: 75px">
						Lors de mon stage de 2ème année, j'ai été amené à utiliser Javascript et Jquery quotidiennement, car toute une partie de l'ERP fonctionne grâce à ces technologies.
					<p>
					<p class="mt-3" style="text-indent: 75px">

						Ainsi, sur de nombreuses pages, des fonctions <strong>onready() et onchange()</strong> permettent au site de <strong>répondre à des demandes utilisateur comme la
							suppression ou l'ajout de lignes supplémentaires pour l'édition des factures.</strong>

					</p>

					<p class="mt-3" style="text-indent: 75px">
						Plusieurs pages ont des requêtes Ajax qui intérrogent la base de données, via des scripts Php.
					</p>

				</div>
			</div>
		</div>


	</div>
</div>


<div class="row mt-5">
	<div class="col-xs-12 col-md-10 col-sm-10 col-lg-12">
		<div class="card">
			<div class="card-title">
				<h2 class="mt-3 ml-2">JQuery :</h2>
				<div class="card-body">
				<div class="card-text">
					<h2 class="text-muted">Présentation :</h2>
					<p class="mt-3" style="text-indent: 75px">
						Jquery est une <strong>bibliothèque Javascript</strong> créée pour faciliter l'écriture des scripts des pages html.<br/>
						La première version de Jquery date de 2006 développée par John Resig.<br/>
						La bibliothèque a connu un très grand succès et est aujourdh'hui une technologie qui figure dans les <strong>fondamentaux du développement web.</strong><br/>
						C'est actuellement <strong>la librairie <em>front-end</em> la plus utilisée dans le monde</strong>, plus d'un site sur deux intègre Jquery (notamment avec Bootstrap qui fonctionne avec).</p>
				</div>
			</div>
			</div>
		</div>


	</div>
</div>


<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>


