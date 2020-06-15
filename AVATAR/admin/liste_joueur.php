<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7d1537bb2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../ASSET/CSS/liste_joueur.css">
    <script src="../ASSET/JS/jquery-3.5.1.js"></script>

    <title>Liste_joueur</title>
  </head>
  <body>
  <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-xl-12">
           <?php include('navbar.php') ?>
            
            </div>
          </div>
          <div class="form mx-auto ">

              <div class="row justify-content-center align-item-center">

              <div class="col-xl-8  col-lg-7 col-md-9 col-12 text-light my-5 ml-4 mr-4">

                    <h2 class="font-weight bold">Liste des joueur par score</h2>
                    <div class="blanc_headind border  border-light bg-light"></div>

                    </div>
              </div>
           
            <div class="row  justify-content-center align-item-center">
                <div class="col-xl-9 col-md-9 cl-sm-6 col-11 bordure text-center  justify-content-center align-item-center">
                
                <table class="table text-light mb-3" id="left">
                    <?php include("recuperation.php");?>
                  
  <thead>
    <tr>
      <th class=" h3" scope="col" id="zz">#</th>
      <th class=" h3" scope="col">Name</th>
      <th class=" h3" scope="col">First name</th>
      <th class=" h3" scope="col">score</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php for($i=0;$i<count($id);$i++) { ?>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo @$name[$i] ?></td>
      <td><?php echo @$firstname[$i] ?></td>
      <td><?php echo @$score[$i] ?></td>
    </tr>
                    <?php }?>
   
  </tbody>
</table>
                        <?php echo @$previous; echo @$next;?>
                        
                </div>
            </div>
      </div>
      </div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../ASSET/JS/liste_joueur.js"></script>
  </body>
</html>