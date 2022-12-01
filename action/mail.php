<?php
session_start();

if(empty($_POST['probleme'])){
    
}

$envoi = "Minipotal52@gmail.com";
$problem = $_POST['probleme'];
$description = $_POST['description']."<br><br>Email from : ".$_POST['email'];

if(mail($envoi, $problem,$description)){
    echo "mail ok";
}else{
    echo "error";
}






?>