<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    
    <script src="https://kit.fontawesome.com/7d1537bb2c.js" crossorigin="anonymous"></script>
    <title>Sid's Dev</title>
  </head>
  <body>
  <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-xl-12">
           <?php include('navbar.php') ?>
            
            </div>
          </div>

          <div id="MaLoad"></div>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>


<!-- <div class="col-xl-6  col-md-5 text-light my-5 ">
              <h4>D'ou viens le Corona</h4>
                        <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
                    <label class="custom-control-label" for="defaultUnchecked">Italie</label>
                    </div> -->

            <!-- Default checked -->
            <!-- <div class="custom-control custom-radio my-3">
            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
            <label class="custom-control-label" for="defaultChecked">Chine</label>
            </div>
            <h4 class="text-center">Quelle est le premier ecole de codage gratuite du senegal</h4>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios1">
                    <label class="custom-control-label" for="defaultUnchecked">Simplon</label>
                    </div> -->

            <!-- Default checked
            <div class="custom-control custom-radio my-3">
            <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios1" checked>
            <label class="custom-control-label" for="defaultChecked">Orange digital center</label>
            </div>
            <button type="button" name="" id="" class="btn btn-primary float-right" btn-lg btn-block>SUIVANT</button>
            </div> -->


            <!-- if(donnees.etat=="true"){

$(this).append(ajoute);
}
if(donnees.etat=="false"){



  $(this).append(ajoute);
  $("span").remove();
  $("input").removeAttr( "checked" );
} -->


<!-- if(donnees.type_question=="simple" && donnees.id==donnees.questions_id){

ajoute=
`
<span class="font-weight-bold text-light h4 simplet " id="question_error  ">${donnees.texte}</span> -->
<!-- Default unchecked -->
<!-- <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input machek" id="defaultUnchecked" checked>
    <label class="custom-control-label" for="defaultUnchecked">${donnees.texte_reponse}</label>
</div> -->
`;

}

<!-- 
$img = $_FILES ["image"] ["name"]; //stocke le nom de fichier d'origine du client 
     $tmp = $_FILES ["image"] ["tmp_name"] ;//stocke le nom du fichier temporaire désigné 
     $errorimg = $_FILES ["image"] ["error"]; //stocke tout code d'erreur résultant du transfert 
     $valid_extensions = array ( 'jpeg' , 'jpg' , 'png' , 'gif') ;
     extensions valides
     $path = 'AVATAR/' ; // télécharger le répertoire
     $img = $_FILES['image']['name'];
     $tmp = $_FILES['image']['tmp_name'];
    récupère l'extension du fichier téléchargé
     $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    peut télécharger la même image en utilisant la fonction rand
     $final_image = rand(1000,1000000).$img;

     check's valid format
 if(in_array($ext, $valid_extensions)) 
 { 
 $path = $path.strtolower($final_image); 
 if(move_uploaded_file($tmp,$path)) 
{
        
}
 }  -->