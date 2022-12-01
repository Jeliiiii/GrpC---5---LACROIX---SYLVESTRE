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
	header("Location: ../projets.php?rien_dedans");
}

$reponse = " ";

if (isset($_POST['id'])) {
	//Connexion a la BDD
	if (!$pdo) {
		header('Location: ../projets.php'); // Connexion impossible
		die('connexion impossible');
	}

	//Retrait selon les paramètres reçus
	try {
		$reponse = $pdo->query("DELETE FROM projet WHERE id ='" . $id . "'");
		$verif = "";
		$_SESSION['res'] = " ";
		$reponse = "";
		$reponse = $pdo->query("SELECT * FROM projet WHERE id ='" . $id . "'");
		while ($do = $reponse->fetch()) {
			if ($do['id'] != $id) {
				$verif = "OK";
			} else {
				$verif = NULL;
			}
		}
		if ($verif != NULL) {
			$_SESSION['res'] = " Projet non supprimé";
			header("Location: ../projets.php");
		} else {
			$_SESSION['res'] = "Projet supprimé";
			header("Location: ../projets.php");
		}
	} catch (\Throwable $th) {
		$_SESSION['res'] = "Echec retrait";
		header("Location: ../projets.php");
	}
}

?>