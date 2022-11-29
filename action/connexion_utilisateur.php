<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    require "database.php";
    $reponse = " ";
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username !== "" && $password !== "") {
        //Verifier si le mot de passe est le même que celui de la BDD
        $mdp =$pdo->prepare('SELECT `password` FROM user WHERE username = ?');
        $mdp->execute(array($username));
        $mdp_end = $mdp->fetch();
        var_dump($mdp_end);
        if($mdp_end === $password){
            $reponse = $pdo->query('SELECT * FROM user WHERE username = "' . $username . '"');

            $donnees = $reponse->rowCount();

            if ($donnees > 0){ // nom d'utilisateur et mot de passe correctes
            
                $_SESSION['username'] = $username;

                //récupération de la fonction de l'utilisateur, fait parti de la table users, 3e colonne
                $reponse2 = $bdd->prepare('SELECT admin FROM user WHERE username =?');
                $reponse2->execute(array($username));
                $admin = $reponse2->fetch();
                $_SESSION['admin'] = $admin['admin'];

                if ($admin['admin'] == 1) {
                    header('Location: ../index.php');
                } elseif ($admin['admin'] ==0) {
                    header('Location: ../index.php');
                }else {
                    header('Location : ../connexion.php?grade_inexistant');
                    echo "Veuillez vérifier l'existence de votre utilisateur";
                }
            } else {
                header('Location: ../connexion.php?mauvais_mdp'); // utilisateur ou mot de passe incorrect
            }   
        }else {
        header('Location: ../connexion.php?argument_vide'); // utilisateur ou mot de passe vide
        }
    }
}
?>

    