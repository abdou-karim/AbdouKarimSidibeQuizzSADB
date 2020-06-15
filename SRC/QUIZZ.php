<?php 
session_start();
        if(!$_SESSION["pseudo_connection"] && !$_SESSION["pass_connection"]){

          header("location:../index.php");
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7d1537bb2c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../ASSET/CSS/style.css">
    
    <script src="../ASSET/JS/jquery-3.5.1.js"></script>
    <title>AKS-QUIZZ</title>
   
  </head>
  <body>
    <div class="container">
    <div class="row justify-content-center ">
            <div class="col-xl-12 p-3">
             <?php include('navbar.php') ?>
              
              </div>
            </div>
    <div id="mmForm">
    <canvas id="myChart"  height="35px" width="100px" ></canvas>
    </div>
   
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
   
  </body>
  <script>
  $(document).ready(function(){
        
  $(".monT").hide();
  let offset = 0;
  $.ajax({
    method:"post",
    url:`recuperation.php`,
    data:{nbr_elt_par_page:5,offset:offset}
  }).done(reponse=>{
  var affiche=JSON.parse(reponse);
  var i=0;
  var label =[];
  var donnees=[];
  for( get of affiche){

  label=[...label,get.nom+" "+get.prenom];
  donnees=[...donnees,get.score];

  }
  var ctx = document.getElementById('myChart').getContext('2d');
 
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea,

    // The data for our dataset
   
    data: {
        labels: label,
        label: 'Evolution admin',
        datasets: [{
            label: 'Top performance joueur',
          
            backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            '#48d1ac'
          ],
            borderColor: 'rgba(255, 159, 64, 0.6)',
            fontColor: 'white',
            data: donnees,
        }]
    },

    options: {
        legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'white',
                fontSize: 18,
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    fontColor: "white",
                    fontSize: 18,
                    
                }
            }],
            xAxes: [{
                ticks: {
                    fontColor: "white",
                    fontSize: 14,
                    
                }
            }]
          }
        
    }

   
});
  
});
    


    $(".monA").on('click',function(){

     $("#mmForm").load("liste_question.php");
     $(".monT").show();

    });

   
    $(".monB").on('click',function(){

        $("#mmForm").load("creer_admin.php",function(){

          return false;
        });
    })
    $(".monC").on('click',function(){

        $("#mmForm").load("liste_joueur.php");
    })
    $(".monD").on('click',function(){

        $("#mmForm").load("creer_question.php");
    })
    $(".mon").on('click',function(){

        $("#mmForm").load("deconnexion.php");
    })

    $(".clik").on('click',"a",function(){

// var coul=$('body').css('background-color');
$(this).css('color','#1762A7');

$(".clik a").not(this).css("color","#202027");

})
  });

     
   
  
  </script>
</html>