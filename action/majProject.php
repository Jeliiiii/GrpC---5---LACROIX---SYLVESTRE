<?php
session_start();
require_once "database.php";
if (isset($_POST['projectName'])) {
    $sql = "UPDATE projet SET projectName = :name WHERE id=:id";
    $dataBinded = array(
        'name' => $_POST['projectName'],
        ':id' => $_POST['id']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
} elseif (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
    $destination = "../img/projetsSup/" . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $destination);

    $sql = "UPDATE projet SET img =(:img) WHERE id=:id";
    $dataBinded = array(
        'img' => $destination,
        ':id' => $_POST['id']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
} else {
    echo "no file";
    exit();
}
//header('Location:../projets.php')
?>