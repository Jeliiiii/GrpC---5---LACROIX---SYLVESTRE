<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    require "database.php";
    $reponse = " ";
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username !== "" && $password !== "") {
        $mdp = $pdo->prepare('SELECT `password` FROM user WHERE username = ?');
        $mdp->execute(array($username));
        $hasheur = $mdp->fetch();
        $hash = $hasheur['password'];
        $don = password_verify($password, $hash);
        if ($don == 1) {
            $reponse = $pdo->query('SELECT * FROM user WHERE username = "' . $username . '"');

            $donnees = $reponse->rowCount();

            if ($donnees > 0) { // nom d'utilisateur et mot de passe correctes

                $_SESSION['username'] = $username;

                //récupération de la fonction de l'utilisateur, fait parti de la table users, 3e colonne
                $reponse2 = $pdo->prepare('SELECT * FROM user WHERE username =?');
                $reponse2->execute(array($username));
                $admin = $reponse2->fetch();
                $_SESSION['admin'] = $admin['admin'];

                if ($admin['admin'] == 1) {
                    $_SESSION['res'] = NULL;
                    $_SESSION['res'] = "Connexion administrateur";
                    header('Location: ../index.php');
                } elseif ($admin['admin'] == 0) {
                    $_SESSION['res'] = NULL;
                    $_SESSION['res'] = "Connexion utilisateur";
                    header('Location: ../index.php');
                } else {
                    $_SESSION['res'] = NULL;
                    $_SESSION['res'] = "Aucun grade attribué";
                    header('Location : ../connexion.php?grade_inexistant');
                }
            } else {
                $_SESSION['res'] = NULL;
                $_SESSION['res'] = "mot de passe incorrect";
                header('Location: ../connexion.php?mauvais_mdp'); // utilisateur ou mot de passe incorrect
            }
        } else {
            $_SESSION['res'] = NULL;
            $_SESSION['res'] = $don;
            header('Location: ../connexion.php?argument_vide'); // utilisateur ou mot de passe vide
        }
    }
}
?>