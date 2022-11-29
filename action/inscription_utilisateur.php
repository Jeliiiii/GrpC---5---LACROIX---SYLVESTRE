<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    require "database.php";
    $reponse = " ";
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username !== "" && $email !== "" && $password !== "") {
        //Verifier si le mot de passe est le même que celui de la BDD
        
            } else {
                header('Location: connexion_utilisateur.php?mauvais_mdp'); // utilisateur ou mot de passe incorrect
            }   
        }else {
        header('Location: connexion_utilisateur.php?argument_vide'); // utilisateur ou mot de passe vide
        }
    }
}
?>