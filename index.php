<?php
require('controllers/userController.php');
require('vues/vue' . (!empty($_GET['action']) ? ucfirst($_GET['action']) : "Accueil") . ".php");


//if (isset($_GET['action'])) {
//	$function = ("view" . ucfirst($_GET['action']));
//	if (function_exists($function)){
//		$function();
//	}
//	else{
//		viewAccueil();
//	}
//
//}
//


if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['mdp']) && !empty($_POST['mdp'])){
	$pseudo = $_POST['pseudo'];

	if(is_array(getVisiteur($pseudo))){
		$user =  getVisiteur($pseudo);
		$_SESSION['pseudo'] = $user['pseudo'];

	}


}



