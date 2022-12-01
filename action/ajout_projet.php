<?php
require_once "database.php";

if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
    $destination = "../img/projetsSup/" . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['name'], $destination);

    $sql = "INSERT INTO projet(name, img) VALUES(:name, :img)";
    $dataBinded = array(
        ':name' => $_POST['projectName'],
        'img' => $destination,
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
} else {
    echo "no file";
    exit();
}

header('Location:../projets.php')
    ?>