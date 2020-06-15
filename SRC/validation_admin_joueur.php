<?php 
session_start();
$username_error=$firstname_error=$pseudo_error=$pass_error=$repass_error=$file_error="";

@$username=$_POST["username"];
@$firstname=$_POST["firstname"];
@$pseudo=$_POST["pseudo"];
@$pass=$_POST["pass"];
@$repass=$_POST["repass"];
@$image=$_POST["image"];
@$submit=$_POST["submit"];

if(isset($submit)){

  if(!preg_match("#^[a-zA-Z \-éàè]+$#",$username)){
    $username_error="invalid name";
}
elseif(!preg_match("#^[a-zA-Z \-éàè]+$#",$firstname)){
  
    $firstname_error=" invalid first name.";
}

elseif(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$pseudo)){

    $pseudo_error="invalid Email!";
}
elseif(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$pass)){

                 $pass_error="invalid password!";
   
}elseif($repass!=$pass){

                 $repass_error="Non-identical password!";

}elseif(empty($image)){

  $file_error="Missing image";
}
else{
  if(isset($_FILES['image']) && $_FILES['image']['error'] == 0)
          {
             
          //1mega octet mo=1000000 d'octets(on verifi si notre image est <3mega octets)
          //pathinfo va garder sous forme de tableau t les infos de notre image
          
          if($_FILES['image']['size']<=3000000)
          {
          $informationsimage = pathinfo($_FILES['image']['name']);
          
          $extensionimage = $informationsimage['extension'];
          
          $extensionarray = array('png','jpeg');
          
          
          if (in_array($extensionimage,$extensionarray)) {
          
              move_uploaded_file($_FILES['image']['tmp_name'],'/.AVATAR/admin/'.$_SESSION["admin"]=basename($_FILES["image"]["name"]));

              $chemin='/.AVATAR/admin/'.$_SESSION["admin"]=basename($_FILES["image"]["name"]);
          
                                     
                 
          
          }else{

              $file_error="format non pris en charge";
          }
          }
          
              
          }
}


}


?>