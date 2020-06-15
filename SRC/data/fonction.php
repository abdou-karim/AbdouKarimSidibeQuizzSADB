<?php 
require_once "constantes.php";
//donne l'url en cours d'utilisation
function getUrl(){
    $url = "http://".$_SERVER['HTTP_HOST'];
    $url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    
      return $url;
  }

//insertion user
  function getPrepIns($table){
    $prep['users']="INSERT INTO `".DB_NAME."`.`users` (`email`,`nat`,`tel`, `date`, `titre`, `prenom`, `nom`, `latitude`, `longitude`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $prep['images']="INSERT INTO `".DB_NAME."`.`images` VALUES ( NULL,?, ?, ?);";
    return $prep[$table];	
}

//requette de selection
function getPrepSel($table,$donnees=[],$id=0){
    $reqUsr= "SELECT * FROM `".DB_NAME."`.`".$table."`";         
    $w=" WHERE ";                
    if(isset($donnees[CHAMP])){
        $reqUsr.= " WHERE `".$donnees[CHAMP]."`=?";
        $w=" AND ";
    }
    // Limitation pour la table USER
    if(($table=="users")&&($id==0)){            
        $debut=($donnees["page"]-1)*$donnees[NB_ELT];
        $reqUsr.= $w." `status`=1 LIMIT ".$debut.",".$donnees[PAS];
    }
    return $reqUsr;	
}
  

?>