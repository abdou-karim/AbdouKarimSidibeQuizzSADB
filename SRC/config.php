<?php 

$server="localhost";
$usernameRoot="root";
$passwordRoot="";
$dbname="donnees_quiz";
$charset = 'utf8mb4';
try{

    $db= new PDO("mysql:host=$server;dbname=$dbname",$usernameRoot,$passwordRoot,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    

}catch(PDOException $e){

    die("unable to connect wuth the database");
}


?>