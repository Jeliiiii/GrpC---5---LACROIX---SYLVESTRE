<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();

//Connexion à la base de données
require('database.php');

$reponse = NULL;

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['admin']) && isset($_POST['email'])) {
    //Rajouter les paramètres reçus

    if($_POST['admin'] ==0){
        $admin =0 ;
    }elseif($_POST['admin'] ==1){
        $admin =1 ;
    }else{
        //faire une redirection vers page de douille
    }


    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $adminbdd = $admin ;
    $email = $_POST['email'];

    try {
        $reponse = $pdo->prepare('UPDATE `user` SET `username` = ?,`password`= ?,`email`= ?, `admin`= ? WHERE `username`= ?');
        $reponse->execute(array($username, $password, $email, $adminbdd, $username));
        $reponse = NULL;
        $_SESSION['res'] = NULL;
        $_SESSION['res'] = "Modification réussite";
        header('Location: admin_user_modify.php');
    } catch (Exception $e) {
        $_SESSION['res'] = NULL;
        $_SESSION['res'] = "Modification impossible";
        header('Location: admin_user_modify.php');
    }
}

?>
