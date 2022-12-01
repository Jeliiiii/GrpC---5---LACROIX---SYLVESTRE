<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

//Connexion à la base de données
require('database.php');

if (isset($_POST['id'])) {
	$id = $_POST['id'];
} else {
	header("Location: ../admin/admin.php?rien_dedans");
}

$reponse = " ";

if (isset($_POST['id'])) {
	//Connexion a la BDD
	if (!$pdo) {
		header('Location: ../admin/admin.php'); // Connexion impossible
		die('connexion impossible');
	}

	//Retrait selon les paramètres reçus
	try {
		$reponse = $pdo->query("DELETE FROM user WHERE id ='" . $id . "'");
		$verif = "";
		$_SESSION['res'] = " ";
		$reponse = "";
		$reponse = $pdo->query("SELECT * FROM user WHERE id ='" . $id . "'");
		while ($do = $reponse->fetch()) {
			if ($do['id'] != $id) {
				$verif = "OK";
			} else {
				$verif = NULL;
			}
		}
		if ($verif != NULL) {
			$_SESSION['res'] = " Utilisateur non supprimé";
			header("Location: ../admin/admin.php");
		} else {
			$_SESSION['res'] = "Utilisateur supprimé";
			header("Location: ../admin/admin.php");
		}
	} catch (\Throwable $th) {
		$_SESSION['res'] = "Echec retrait";
		header("Location: ../admin/admin.php");
	}
}

?>