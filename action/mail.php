<?php
session_start();

if(empty($_POST['probleme'])){
    
}

$mail = "Minipotal52@gmail.com";
$problem = $_POST['probleme'];
$description = $_POST['description']."<br><br>Email from : ".$_POST['email'];

if(mail($mail, $problem,$description)){
    echo "mail ok";
}else{
    echo "error";
}
?>