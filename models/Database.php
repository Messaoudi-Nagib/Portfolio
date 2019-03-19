<?php


function dbConnect()
{
	try {
		$db = new PDO('mysql:host=localhost;dbname=portfo;charset=utf8', 'root', 'root');
		return $db;
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
}

function getVisiteur($pseudo)
{
	$db = dbConnect();
	$req = "SELECT * FROM user WHERE pseudo = :pseudo";
	$res = $db->prepare($req);
	$res->execute(compact("pseudo"));

	return $res->fetch();
}

