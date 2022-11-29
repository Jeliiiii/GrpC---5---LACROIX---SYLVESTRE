<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

//session_start();

?>

<?php

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
        if($mdp_end == $password)
            $reponse = $pdo->query('SELECT * FROM user WHERE username = "' . $username . '"');

            $donnees = 1

            if ($donnees > 0) // nom d'utilisateur et mot de passe correctes
            {
                $_SESSION['username'] = $username;

                //récupération de la fonction de l'utilisateur, fait parti de la table users, 3e colonne
                $reponse2 = $bdd->prepare('SELECT admin FROM user WHERE username =?');
                $reponse2->execute(array($username));
                $admin = $reponse2->fetch();
                $_SESSION['admin'] = $grade['admin'];

                if ($grade['admin'] == 1) {
                    header('Location: ../index.php');
                } elseif ($grade['admin'] ==0) {
                    header('Location: ../index.php');
                }else {
                    header('Location : connexion.php');
                    echo "Veuillez vérifier l'existence de votre utilisateur";
                }
            } else {
                header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }   
    }else {
        header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div id="container">
        <!-- zone de connexion -->

        <form method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN'>


        </form>
    </div>

    
</body>

</html>