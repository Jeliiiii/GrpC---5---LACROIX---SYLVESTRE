<?php
$sql = "SELECT * FROM projet";
$pre = $pdo->prepare($sql);
$pre->execute();
$data_project = $pre->fetchAll(PDO::FETCH_ASSOC);
?>