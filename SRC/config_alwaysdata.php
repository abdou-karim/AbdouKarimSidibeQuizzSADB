<?php 
$host = 'mysql-abdoukarimsidibe-quizz.alwaysdata.net';
$dbname   = 'abdoukarimsidibe-quizz_dbfinal';
$users = '207861_aksfinal';
$pass = 'motdepasse961nouveaux';

$charset = 'utf8mb4';

try{

    $db= new PDO("mysql:host=$host;dbname=$dbname",$users,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    die("unable to connect wuth the database");
}
?>