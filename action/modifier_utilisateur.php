<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

//Connexion à la base de données
require('database.php');

$reponse = NULL;

if (isset($_POST['username']) && isset($_POST['admin'])) {
    //Rajouter les paramètres reçus

    if ($_POST['admin'] == "Non") {
        $admin = 0;
    } elseif ($_POST['admin'] == "Oui") {
        $admin = 1;
    } else {
        header('Location: ../admin/admin.php');
    }


    $username = $_POST['username'];
    $adminbdd = $admin;

    try {
        $reponse = $pdo->prepare('UPDATE `user` SET `username` = ?,`admin`= ? WHERE `username`= ?');
        $reponse->execute(array($username, $adminbdd, $username));
        $reponse = NULL;
        $_SESSION['res'] = NULL;
        $_SESSION['res'] = "Modification réussite";
        header('Location: ../admin/admin.php');
    } catch (Exception $e) {
        $_SESSION['res'] = NULL;
        $_SESSION['res'] = "Modification impossible";
        header('Location: ../admin/admin.php');
    }
}

?>