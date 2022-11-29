<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    require "database.php";
    $reponse = " ";
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username !== "" && $email !== "" && $password !== "") {

        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            try {
                $reponse = NULL;

                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $grade = $_POST['email'];

                if (!$pdo) {
                    header('Location: ../connexion.php'); // Connexion impossible
                    die('connexion impossible');
                }

                try {
                    $reponse = $pdo->prepare('INSERT INTO `user`(`username`, `password`, `email`) VALUES (?,?,?)');
                    $reponse->execute(array($username, $password, $email));
                    $_SESSION['res'] = "Utilisateur ajouté";
                    header('Location: ../connexion.php');
                } catch (\Throwable $th) {
                    $_SESSION['res'] = NULL;
                    $_SESSION['res'] = "Une erreur s'est produite";
                    header("Location: ../connexion.php");
                }
            } catch (\Throwable $th) {
                $_SESSION['res'] = "Echec Ajout";
                header("Location: ../connexion.php");
            }
        }
    } else {
        header('Location: ../connexion.php?mauvais_mdp'); // utilisateur ou mot de passe incorrect
    }
} else {
    header('Location: ../connexion.php?argument_vide'); // utilisateur ou mot de passe vide
}

?>