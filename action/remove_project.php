<?php
require_once "database.php";
$sql = "DELETE FROM projet WHERE id=:id";
$dataBinded = array(
    ':id' => $_POST['id']
);
$pre = $pro->prepare($sql);
$pre->execute($dataBinded);

header('Location:../projets.php');