<?php
session_start();

require_once "database.php";

$mail = "Minipotal52@gmail.com";
$problem = $_POST['probleme'];
$description = $_POST['description']."<br><br>Email from : ".$_POST['email'];
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');

if(mail($mail, $problem,$description, $headers)){
    echo "mail ok";
    exit();
    /*header('Location: ../index.php?mail_sent');*/
}else{
    echo "error";
    exit();
    /*header('Location: ../index.php?mail_unsent');*/
}
?>