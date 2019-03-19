<?php $titre = 'Aïe !'; ?>
<?php ob_start(); ?>


<div class="row">
<div class="w-100 d-flex align-items-center justify-content-center h-75">
	<h2 class="titlec mx-auto text-center"><i class="fas fa-exclamation-circle" style="margin-left: 10px"></i>Oops, la page n'existe pas...<i class="fas fa-exclamation-circle" style="margin-left: 10px"></i></h2>


</div>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require('template.php');
