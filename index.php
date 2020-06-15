<?php 
include('SRC/config_.php');
include('SRC/traitement_inde.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7d1537bb2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ASSET/CSS/connexion.css">
    
    <script src="../ASSET/JS/jquery-3.5.1.js"></script>
    <title>Creer_admin</title>
  </head>
  <body>
      
    <div class="container">
      
    
       
        <div class="form row  justify-content-center  align-items-center">
                        <h1 class="p-3 text-light">WELCOM</h1>
            <div class="col-xl-5  col-md-5 text-light  formul   col-sm-8 col-10 ">
           
            <form  id="registration_form" method="POST"  class="needs-validation admin"  novalidate>
            <div class=" text-center"><img class="rounded-circle" src="ASSET/IMG/MANE.jpg" alt="" width="70px"></div>
            
                <div class="form-group pseudo_success">
                <span class="msg_error font-weight-bold text-danger" id="pseudo_error">  <?php echo @$pseudo_error?></span>   
                <input type="text" class="form-control maIn m-2 pt-0 pseudo" name="login" placeholder="Enter your login" id="pseudo" required value="<?php echo @$pseudo?>" >
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
              Please choose a pseudo.
            
            </div>

                </div>
                <div class="form-group pass_success">
                <span class="msg_error font-weight-bold text-danger" id="pass_error"> <?php echo @$pass_error?></span>   
                <input type="password" class="form-control maIn m-2 pt-0 pass" name="pass" placeholder="Password" id="pass" required >
                   <div class="valid-feedback font-weight-bold">
           Correct!
          </div>
          <div class="invalid-feedback font-weight-bold">
              Please choose a password.
             
            </div>
                </div> 
<div class="text-center"><input type="submit" id="sub" name="submit" value="Create Account" class="btn btn-outline-primary mainBtn"></div>
                
                
                <div>
                    <div>
                        <div class="circle"></div>
                        <span  class="ccc"><a href="#" class="text-light col-sm-12 ml-2">Forget Username/Password</a></span>
                    </div>
                    <div>
                        <div class="circle"></div>
                        <span class="ccc"><a href="SRC/creer_user.php" class="text-light  col-sm-12 ml-2">Don’t have an account ? sign up</a></span>
                    </div>
                  
                  
                </div>

               
                
            </form>
            
            
            </div>
                    
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="ASSET/JS/connexion.js"></script>
    
</body>
</html>
