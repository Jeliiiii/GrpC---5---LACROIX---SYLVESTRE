<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    require "database.php";
    $reponse = " ";
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    if ($_POST['admin'] == "Non") {
        $admin = 0;
    } elseif ($_POST['admin'] == "Oui") {
        $admin = 1;
    } else {
        header('Location: ../img/sortie/comment_ça_mon_reuf.png');
    }

    if ($username !== "" && $email !== "" && $password !== "" && $admin !== "") {

        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            try {
                $reponse = NULL;

                if (!$pdo) {
                    header('Location: ../admin/admin.php'); // Connexion impossible
                    die('connexion impossible');
                }

                try {
                    $reponse = $pdo->prepare('INSERT INTO `user`(`username`, `password`, `email`,`admin`) VALUES (?,?,?,?)');
                    $reponse->execute(array($username, $password, $email, $admin));
                    $_SESSION['res'] = "Vous vous êtes bien inscrit, vous pouvez vous connecter.";
                    header('Location: ../connexion.php');
                } catch (\Throwable $th) {
                    $_SESSION['res'] = NULL;
                    $_SESSION['res'] = "Une erreur s'est produite";
                    header("Location: ../admin/admin.php");
                }
            } catch (\Throwable $th) {
                $_SESSION['res'] = NULL;
                $_SESSION['res'] = "Echec Ajout";
                header("Location: ../admin/admin.php");
            }
        }
    } else {
        header('Location: ../admin/admin.php?mauvais_mdp'); // utilisateur ou mot de passe incorrect
    }
} else {
    header('Location: ../admin/admin.php?argument_vide'); // utilisateur ou mot de passe vide
}
?>