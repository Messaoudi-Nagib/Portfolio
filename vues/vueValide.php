<?php $titre = 'Erreur ! ' ?>
<?php ob_start() ?>
<div class="row">
	<div class="col-md-10">
		<h2>
		Bonojour
		</h2>
	</div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>