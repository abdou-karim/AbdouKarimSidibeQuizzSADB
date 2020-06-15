<!-- 
<!doctype html>
<html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7d1537bb2c.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../ASSET/CSS/creer_question.css">
    <script src="../ASSET/JS/jquery-3.5.1.js"></script>

    <!-- <title>Creer_question</title>
  </head>
  <body>
  <div class="container"> -->
      
      <div class="row justify-content-center">
         
          </div>
          <div >
              <form  method="POST" id="registration"  novalidate>
              <div id="ma_form">
              <div class="row justify-content-center align-item-center">

              <div class="col-xl-9  col-lg-9 col-md-11 col-12 text-light my-5 ml-4 mr-4">

                    <h2 class="font-weight bold">Vous etes sur la page de creation des questions !</h2>
                    <div class="blanc_headind border  border-light bg-light"></div>

                    </div>
              </div>
            <!-- QUESTIONS-->
            <div class="row  justify-content-center align-item-center">
                    <div class="col-xl-6">
                                  <div class="input-group mb-3 ">
                <div class="input-group-prepend">
                  <span class="input-group-text questionaire " id="basic-addon1">QUESTION</span>
                </div>
                <input type="text" name="ma_question" class="  form-control question question_success"  aria-describedby="basic-addon1" id="question">
              </div>
                                  
                    </div>
            </div>
            <!--END QUESTIONS-->
            <!-- nombre de points-->
            <div class="row  justify-content-center align-item-center">
            <div class="col-xl-6">
                                  <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text questionaire" id="basic-addon1">Nbr de points</span>
                </div>
                <input type="number" name="ma_score" min="0" class="form-control score_success" placeholder="score du question" aria-describedby="basic-addon1" id="points">
              </div>
                                  
                    </div>
            </div>
            <!--END nombre de points-->
            <!--  type reponse-->
            <div class="row  justify-content-center align-item-center">
            <div class="col-xl-6">
                                  <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text questionaire" id="basic-addon1">Type de reponse</span>
                </div>
                <select name="ma_select" class="form-control type_success" id="type_r">
                      <option value="defaut">Donner le type de réponse</option>
                      <option value="multiple">Choix multiple</option>
                      <option value="simple">Choix simple</option>
                      <option value="texte">Choix texte</option>
                  </select>
                  <div class="input-group-prepend" >
                  <button  type="button"  onclick="onAddInput()" style='background:none;border:none;outline:none;' ><img  src="../ASSET/IMG/ic-ajout-réponse.png"></button>
                </div>
              </div>
                                  
                    </div>
            </div>
            </div>
            
            <!--END type reponse-->
           
            <div class="row justify-content-center align-item-center ">
              <div class="col-xl-6 ">
                
              
                  <input type="submit" id="sub" name="button_submit" value="Enregistrer" class="btn btn-outline-primary text-light font-weight-bold  p-3 ">
                      
            </div>
            </div>
            <!--END type reponse-->
            <input type="hidden" id="myhidden" name="testeur" value="<?= $_POST["myhidden"]="questionnaire"?>">
          
            </form>
     </div>
      </div>
      
      <script src="../ASSET/JS/creer_question.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
   
    <script src="../ASSET/JS/ajax_insertion_bd.js"></script>
 
    
  </body>
</html>
