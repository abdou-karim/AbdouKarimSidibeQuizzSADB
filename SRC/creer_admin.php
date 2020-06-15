<?php include("validation_admin_joueur.php")?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../ASSET/CSS/liste_question.css">
    <!-- <script src="https://kit.fontawesome.com/7d1537bb2c.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../ASSET/CSS/creer_admin.css">
    <script src="../ASSET/JS/jquery-3.5.1.js"></script>
    
    <title>Creer_admin</title>
  </head>
  <body>
      
    <div class="container">
      
        

        </div>
       
        <div class="form row  justify-content-center align-item-center  mx-auto ">
      
            <div class="col-xl-5  col-md-5 text-light  formul   col-sm-8 col-10">
            
            <form  id="registration_form" method="POST"  class="needs-validation admin" enctype="multipart/form-data" novalidate>
                      
                <div class="form-group username_success">
                   <span class="msg_error font-weight-bold text-danger username" id="username_error"><?php echo $username_error ?></span>
                   <input type="text" class="form-control maIn  m-2  border-none username" id="username" name="username" placeholder="Username"  
                   required value="<?php echo @$_POST["username"]?>" >
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
              Please choose a username.
              
            </div>

                </div>
             
                <div class="form-group firstname_success">
                  <span class="msg_error font-weight-bold text-danger text-danger" id="firstname_error"><?php echo $firstname_error?></span>
                   <input type="text" class="form-control maIn m-2 pt-0 firstname firstname" name="firstname" id="firstname" placeholder="Firstname" required value="<?php echo $firstname?>" >
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
              Please choose a firstname.
             
            </div>

                </div>
                <div class="form-group pseudo_success">
                <span class="msg_error font-weight-bold text-danger" id="pseudo_error">  <?php echo $pseudo_error?></span>   
                <input type="text" class="form-control maIn m-2 pt-0 pseudo" name="pseudo" placeholder="Enter your login" id="pseudo" required value="<?php echo $pseudo?>" >
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
              Please choose a pseudo.
            
            </div>

                </div>
                <div class="form-group pass_success">
                <span class="msg_error font-weight-bold text-danger" id="pass_error"> <?php echo $pass_error?></span>   
                <input type="password" class="form-control maIn m-2 pt-0 pass" name="pass" placeholder="Password" id="pass" required value="<?php echo $pass?>">
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
              Please choose a password.
             
            </div>
                </div>

                <div class="form-group repass_success">
                <span class="msg_error font-weight-bold text-danger" id="repass_error"> <?php echo $repass_error?></span>   
                <input type="password" class="form-control maIn m-2 pt-0 repass" name="repass" placeholder="Confirm password" id="repass" required value="<?php echo $repass?>">
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
          Non-identical password.
         
            </div>
                </div>

                <div class="form-group image_success">

                     <label for="image" class="label-file text-center my-2">Avatar</label>

                   <span class="msg_error font-weight-bold text-danger" id="image_error"><?php echo $file_error?></span>
                     <input type="file" class="form-control maIn m-2 pt-0 d-none " name="image"  id="image" value="<?php echo $image?>"  accept="image/png,image/jpeg" onchange="loadFile(event)" required>
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
          Non-identical password.
            </div>
                </div>
                <input type="hidden" id="mahidden" name="certificat" value="<?= $_POST["mahidden"]="administrateur"?>">
                <input type="submit" id="sub" name="submit_admin" value="Join" class="btn btn-outline-primary mainBtn">
                
                <!-- Champ masqué qui va récupérer l'auto-increment de l'identifiant unqique du disque -->

                <script src="../ASSET\JS\ajax_insertion_bd.js"></script>
                
            </form>
            
            
            </div>
            <div class="col-xl-2 col-md-2 col-sm-4 col-3 p-2 ml-5">
            
<span class=" float-right mr-5 "><a href="#"><img src="<?php echo $_SESSION["admin"];?>" id="cre_admin" class="rounded-circle " width="140px" alt=""></a></span>

</div>
            
        </div>
        
    </>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <script src="../ASSET\JS\creer_admin.js"></script>
   
    
    <script>
      var loadFile = function(event) {
    var output = document.getElementById('cre_admin');
    cre_admin.src = URL.createObjectURL(event.target.files[0]);
    cre_admin.onload = function() {
      URL.revokeObjectURL(cre_admin.src) // free memory
    }
  };
    </script>
    
</body>
</html>
