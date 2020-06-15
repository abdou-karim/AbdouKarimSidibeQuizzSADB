<?php 



include("config.php");


if (!$db){

    die ("Connection impossible");
}
else {
    //recuperation nombre  d'enregistrement
    $count=$db->prepare("SELECT COUNT(id) AS nbEnregistrement FROM users");
    $count->setFetchMode(PDO::FETCH_ASSOC);
    $count->execute();
    $result=$count->fetchAll();
    //pagination
       
        if(isset($_GET['p'])){
            $page=$_GET['p'];
        }else{
            $page=1;
        }
        $nbr_elt_par_page=5;
        $nbr_de_page=ceil($result[0]["nbEnregistrement"]/$nbr_elt_par_page);
        $debut=($page-1)*$nbr_elt_par_page;
        
    //recuperation des colones de la table
    $requete=$db->prepare("SELECT * FROM `users` WHERE profil='joueur' ORDER BY score DESC LIMIT $debut,$nbr_elt_par_page");
    $requete->setFetchMode(PDO::FETCH_ASSOC);
    $requete->execute();

    $result = $requete->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($result);
        $tableu=$result;
        $name=[];
        $firstname=[];
        $score=[];
        $id=[];
        foreach($tableu as $valeur){

       
        $name[]=$valeur["nom"];
        $firstname[]=$valeur["prenom"];
        $score[]=$valeur["score"];
        $id[]=$valeur["id"];
            
}
for($i=1;$i<=$page;$i++){
    if($page!=$i){

        "<a href='liste_joueur.php?p=$i'>$i /</a>";
    }else{
         "<a>$i/</a>";
    }
    
}
    if(!empty($page)){

    if($page>1){

        $precedent=$page-1;
        $previous="<a href='liste_joueur.php?p=$precedent'  class='btnn'><button type='button' name='' class=' btn btn-outline-primary font-weight-bold float-left text-light' btn-lg btn-block>precedent</button></a>";
      
        
    }
    if($page>=1 && $page< $nbr_de_page){

        $suivant=$page+1;

        $next="<a href='liste_joueur.php?p=$suivant' class='btnn'> <button type='button' name='' id='btn2' class=' btn btn-outline-primary font-weight-bold float-right text-light' btn-lg btn-block>suivant</button></a>";

    }
   
}

}
?>

