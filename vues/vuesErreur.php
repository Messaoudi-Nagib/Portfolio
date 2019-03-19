<?php $titre = 'Erreur ! ' ?>
<?php ob_start() ?>
<div class="alert alert-danger" role="alert">
	Attention, vos identifiants ne sont pas corrects !
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require('vues/template.php'); ?>