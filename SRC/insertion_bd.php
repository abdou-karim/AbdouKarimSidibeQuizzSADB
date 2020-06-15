<?php 
session_start();
include("config.php");
global $db;
if (!$db){ // Contrôler la connexion

    $MessageConnexion = die ("connection impossible");
}
else {


    // if(isset($_FILES['image']) && $_FILES['image']['error'] == 0)
    // {
       
    // //1mega octet mo=1000000 d'octets(on verifi si notre image est <3mega octets)
    // //pathinfo va garder sous forme de tableau t les infos de notre image
    
    // if($_FILES['image']['size']<=3000000)
    // {
    // $informationsimage = pathinfo($_FILES['image']['name']);
    
    // $extensionimage = $informationsimage['extension'];
    
    // $extensionarray = array('png','jpeg');
    
    
    // if (in_array($extensionimage,$extensionarray)) {
    
    //     move_uploaded_file($_FILES['image']['tmp_name'],'../AVATAR/'.$_SESSION["admin"]=basename($_FILES["image"]["name"]));

    //     $chemin=basename($_FILES["image"]["name"]);
    
                               
           
    
    // }
    // }
    
        
    // }

    $nom =trim($_POST['nom']);
    $prenom =trim($_POST['prenom']);
    $pseudo =trim($_POST['login']);
    $pass =trim($_POST['pass']);
    $sender = trim($_POST['sender']);

    if(isset($_FILES['image'])){

 $img = $_FILES ["image"]["name"]; //stocke le nom de fichier d'origine du client 
 $tmp = $_FILES ["image"]["tmp_name"] ;//stocke le nom du fichier temporaire désigné 
 $errorimg = $_FILES ["image"]["error"]; //stocke tout code d'erreur résultant du transfert 
 $valid_extensions = array ( 'jpeg' , 'jpg' , 'png') ;
//extensions valides
 $path = '../AVATAR/' ; // télécharger le répertoire
 $img = $_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
//récupère l'extension du fichier téléchargé
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
//peut télécharger la même image en utilisant la fonction rand
$final_image = rand(1000,1000000).$img;

//check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
 


   // Requête d'insertion

      if($sender=="administrateur"){

        $profile='admin';
        $admin_exe=$db->prepare("INSERT INTO `users` ( `nom`, `prenom`, `pseudo`, `pass`,`avatar`, `profil`) VALUES (:Mon_nom, :Mon_prenom, :Mon_pseudo, :Mon_pass,:Mon_chemin, :Mon_profile);");

        $admin_exe->bindParam(':Mon_nom',$nom);
        $admin_exe->bindParam(':Mon_prenom',$prenom);
        $admin_exe->bindParam(':Mon_pseudo',$pseudo);
        $admin_exe->bindParam(':Mon_pass',$pass);
        $admin_exe->bindParam(':Mon_chemin',$path);
        $admin_exe->bindParam(':Mon_profile',$profile);
        

        if($admin_exe->execute()){

            echo "Successfully sent";
        
        }else{
        
            echo "Error checking your givens";
        }
        
    }

    if($sender=="user"){

        $profile='joueur';
        $users_exe=$db->prepare("INSERT INTO `users` ( `nom`, `prenom`, `pseudo`, `pass`,`avatar`, `profil`) VALUES (:Mon_nom, :Mon_prenom, :Mon_pseudo, :Mon_pass,:Mon_chemin, :Mon_profile);");

        $users_exe->bindParam(':Mon_nom',$nom);
        $users_exe->bindParam(':Mon_prenom',$prenom);
        $users_exe->bindParam(':Mon_pseudo',$pseudo);
        $users_exe->bindParam(':Mon_pass',$pass);
        $users_exe->bindParam(':Mon_chemin',$path);
        $users_exe->bindParam(':Mon_profile',$profile);
        

if( $users_exe->execute()){

    echo "Successfully sent";

}else{

    echo "Error checking your givens";
}
     

    }

}
} 
  } else{
      echo "error transmission";
  }
  
  //variable creer question
$question=trim($_POST["ma_question"]);
$points=trim($_POST["ma_score"]);
$type=trim($_POST["ma_select"]);
$texte=trim($_POST["reponseTexte"]);
$reponseCheck=[];
$bonnecheck=[];
$reponseradio=[];
$radio="";
$id_question="";
   
   
        if(isset($_POST["testeur"]) && !empty($question) && !empty($points) && !empty($type)){


$sendQuestion=$db->prepare("INSERT INTO questions (texte,type_question,points) VALUES (:question,:type,:points)");
       
            $sendQuestion->bindParam(':question',$question);
            $sendQuestion->bindParam(':type',$type);
            $sendQuestion->bindParam(':points',$points);

    if($sendQuestion->execute()){

       
        echo "<h1>Donnees envoyés dans la base</h1>";

    }else{
        echo "<h1>Donnees non envoyés dans la base</h1>";
    }

    $count=$db->prepare("SELECT MAX(id) FROM questions");
    $count->setFetchMode(PDO::FETCH_ASSOC);
    $count->execute();
    $result=$count->fetch();
              foreach($result as $id){
                  $id_question=$id;
              }

            if($type=="texte"){

            
     $sendReponse=$db->prepare("INSERT INTO `reponse` (`texte_reponse`, `etat`, `questions_id`) VALUES (:Matexte,:bonne,:id_quest)");
                    $val="1";
              $sendReponse->bindParam(':Matexte',$texte);
              $sendReponse->bindParam(':id_quest',$id_question);
              $sendReponse->bindParam(':bonne',$val);
    if($sendReponse->execute()){

        echo "<h1>Donnees envoyés dans la base</h1>";

    }else{

        echo "<h1>Donnees non envoyés dans la base</h1>";
    }

            }

            if($type=="multiple"){

                $sendReponse=$db->prepare("INSERT INTO `reponse` (`texte_reponse`, `etat`, `questions_id`) VALUES (:Matexte,:bonne,:id_quest)");

                for($i=1;$i<=10;$i++){

                    if(isset($_POST["Reponse$i"])){

                        $reponseCheck[]=$_POST["Reponse$i"];

                        foreach($reponseCheck as $valeur){

                            $sendReponse->bindValue(':Matexte',$valeur);
                            $sendReponse->bindParam(':id_quest',$id_question);

                          
            
                        }
                         
                        if(isset($_POST["chekReponse$i"])){

                                $bonnecheck[]=$_POST["chekReponse$i"];

                                foreach($bonnecheck as $valeur){

                                    $sendReponse->bindParam(':bonne',$valeur);
                                }
                               
                        }else{
                            $fals=0;
                            $sendReponse->bindParam(':bonne',$fals);   
                        }

                        if($sendReponse->execute()){

                            echo "<h1>Donnees envoyés dans la base</h1>";
                    
                        }else{
                    
                            echo "<h1>Donnees non envoyés dans la base</h1>";
                        }
                                        
                        
                    }

                    
                }

                
            }

            if($type=="simple"){

                $sendReponse=$db->prepare("INSERT INTO `reponse` (`texte_reponse`, `etat`, `questions_id`) VALUES (:Matexte,:bonne,:id_quest)");
                    
                for($i=1;$i<=10;$i++){

                    if(isset($_POST["Radioreponse$i"])){

                        $reponseradio[]=$_POST["Radioreponse$i"];

                        foreach($reponseradio as $valeur){

                            $sendReponse->bindValue(':Matexte',$valeur);
                            $sendReponse->bindParam(':id_quest',$id_question);
                        }

                        if(isset($_POST["choixSimple"]) && $_POST["choixSimple"]==$i){

                            $true=$_POST["choixSimple"];
                            $sendReponse->bindParam(':bonne',$true);

                        }else{

                            $true='false';
                            $sendReponse->bindParam(':bonne',$true);
                        }

                        if($sendReponse->execute()){

                            echo "<h1>Donnees envoyés dans la base</h1>";
                    
                        }else{
                    
                            echo "<h1>Donnees non envoyés dans la base</h1>";
                        }
                    }
                   
                }

                

            }

          
            
    




}

}


?>



