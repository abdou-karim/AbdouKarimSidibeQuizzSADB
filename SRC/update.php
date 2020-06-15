<?php 
include("config.php");

if (!$db){ // Contrôler la connexion

    $MessageConnexion = die ("connection impossible");
}
else {

    $table=$_POST["table"];
   $champ=$_POST['champ'];
   $valeur=$_POST['val'];
   $maId=$_POST['id'];
   $mapro="joueur";

   if(isset($table,$champ,$valeur,$maId)){

    $requet=$db->prepare("UPDATE `users` SET `$champ`='$valeur' WHERE `id`='$maId' ");
    $requet->execute();

   }else{

    echo "ERREUR 771659895";
   }


   

}

    



                 







?>