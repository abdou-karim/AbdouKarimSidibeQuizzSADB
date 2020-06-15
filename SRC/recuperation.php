<?php 



include("config.php");


if (!$db){

    die ("Connection impossible");
}
else {
    
    $nbr_elt_par_page=$_POST["nbr_elt_par_page"];
    $offset=$_POST["offset"];

        $requete=$db->prepare("SELECT * FROM `users` WHERE profil='joueur'AND statut=1 ORDER BY score DESC LIMIT $offset,$nbr_elt_par_page");
    $requete->execute();

    $result= $requete->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($result);
}
?>

