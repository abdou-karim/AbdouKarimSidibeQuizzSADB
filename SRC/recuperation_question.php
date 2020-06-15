<?php 
include("config.php");


if (!$db){

    die ("Connection impossible");
}
else {

    
    $limit = $_POST['limit'];
    $offset = $_POST['offset'];
   

    $requete=$db->prepare("SELECT * FROM questions LEFT JOIN reponse ON questions.id = reponse.questions_id  LIMIT $offset,$limit");
    $requete->setFetchMode(PDO::FETCH_ASSOC);
    $requete->execute();

    $result= $requete->fetchAll(PDO::FETCH_ASSOC);

   
    
    echo json_encode($result);

        }


?>