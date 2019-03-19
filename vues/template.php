<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" type="image/png" href="img/logoNM.png"/>

		<title><?= $titre ?></title>
		<link rel="stylesheet" href="style/demo-page.css"/>
		<link rel="stylesheet" href="style/hover.css"/>
		<link rel="stylesheet" href="style/style.css"/>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Bienvenue sur le portfolio de Messaoudi Nagib ! Tout mon parcours, mes compétences et mes veilles technologiques sont ici." >
		<meta author="Messaoudi Nagib">
		<meta name="keywords" content="portfolio, nagib, Nagib, Messaoudi, messaoudi, saint etienne, lyon, bts sio, formation, lycée simone weil">









	</head>
	<div class="<?php echo $bg; ?>">
		<body>
			<header><nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">
				<img class="logo" src="img/logoNM.png" width="60" height="60" alt="" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link is-size-4" href="page-accueil">Accueil <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link is-size-4" href="page-contact">Contact</a>
						<a class="nav-item nav-link is-size-4" href="page-competences">Compétences</a>
						<a class="nav-item nav-link is-size-4" href="page-veille">Veilles Technologiques</a>
						<a class="nav-item nav-link is-size-4" href="page-stage">Stage</a>
					</div>
				</div>
				<div class="header">
				
					<div class="progress-container">
						<div class="progress-bar" id="myBar"></div>
					</div>
				</div>
			</nav>
			
		</header>
			<div class="loader-wrapper">
				<div class="loader-ctm">
					<img class="responsive rounded"  src="img/logoNM.png" style="width:120px; height:120px; position:absolute;top:200px;left:45%;    animation-name:lo; animation-duration:1.5s; animation-iteration-count: infinite;">
				</div>

			</div>
		<div class="container" style="width: auto">

			<?= $contenu ?>
			
		</div>
		<footer class="footer" style="margin-top: 50px; margin-bottom: 30px; bottom: 0;">
			<div class="container is-fluid">
				<p class="text-center" style="font-size: 20px;">
					Site crée par Messaoudi Nagib <img class="logo" src="img/logoNM.png" width="40px" height="40px"> Copyright © <?php echo date('Y'); ?>,  tous droits réservés.
				</p>
			</div>
		</footer>


			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>
			$(window).on("load" ,function(){
			    $(".loader-wrapper").fadeOut("slow");

			});
		</script>

		
	</body>
</div>
</html>