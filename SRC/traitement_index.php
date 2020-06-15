<?php 
session_start();
$requet=$db->prepare("SELECT pseudo,pass,profil,nom,prenom FROM users WHERE pseudo=? LIMIT 1");

if(isset($_POST["submit"])){

  if(!empty($_POST["login"]) || !empty($_POST["pass"])){

$requet->execute([$_POST["login"]]);
$user=$requet->fetch();

  
if(isset($_POST["login"],$_POST["pass"]) && $user["profil"]=="joueur" && $user['profil']!=="admin"){

  if($user && $_POST["pass"]==$user["pass"]){

$_SESSION["joueur"]=$user["prenom"]." ".$user["nom"];
    header("location:./SRC/page_jeux.php");
   
   }
   else{
     
     $message="Erreur de saisie !";
   }
   
     }

     if(isset($_POST["login"],$_POST["pass"]) && $user["profil"]=="admin" && $user['profil']!=="joueur"){
    
       if($user && $_POST["pass"]==$user["pass"]){
              
        $_SESSION["admin_connecte"]=$user["prenom"]."\n".$user["nom"];
        $_SESSION["pseudo_connection"]=$user["pseudo"];
        $_SESSION["pass_connection"]=$user["pass"];
          header("location:./SRC/QUIZZ.php");

       }else{

          $message="Erreur de saisie !";
       }
     }

}else{
  $message="Tous les champs sont obliglatoires!";
}

}
?>