
<script src="../ASSET/JS/jquery-3.5.1.js"></script>


<div class="blanc border  border-light bg-light"></div>

<nav class="navbar navbar-expand-md navbar-light  ml-5 mr-5 p-2 mt-3" >
<span class=""><a href="#"><img src="../AVATAR/admin/admin.png" class="rounded-circle " width="70px" alt=""></a></span>

<button type="button" class="monButton navbar-toggler text-dark bg-light " data-toggle="collapse" data-target="#nav"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse justify-content-between"  id="nav">
       <!--navbar-nav mettre horizontal les links collapse fait disparaitre la barre et le input(pour gere mobile motakh gnou def ko) -->
       <ul class="navbar-nav">
<li class="nav-item"><a class="nav-link text-light font-weight-bold text-uppercase px-3 " href="#"><?php echo $_SESSION["admin_connecte"] ?></a></li>
<li  class=" nav-item dropdown  bg-dark monT"><a class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle" data-toggle="dropdown" href="#">Type Reponse</a>
<div class="dropdown-menu " >
  
  <a class="dropdown-item" href="#">Simple</a>
  <a class="dropdown-item" href="#">Multiple</a>
  <a class="dropdown-item" href="#">Texte</a>
  <a class="dropdown-item" href="#">Aleatoire</a>
  
</div>
</li>
<li class="nav-item dropdown  bg-dark clik"><a class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle" data-toggle="dropdown"  href="#" >Menu</a>
<div class="dropdown-menu col-10 text-dark font-weight-bold bg-dark ">
  
  <a class="dropdown-item monA" href="#">Liste Question</a>
  <a class="dropdown-item monB" href="#">Creer Admin</a>
  <a class="dropdown-item monC" href="#">Liste Joueur</a>
  <a class="dropdown-item monD" href="#">Creer Question</a>
  <a class="dropdown-item monE" href="../index.php">Deconnexion</a>
 
  
</div>
</li>

       </ul>
       
       <form class="form-inline ml-3 ">
         
        <div class="input-group ">
            <!--input-group permet de regroupet le button et la zone de recherche -->
            <input type="text" class="form-control" placeholder="search">
            <div class="input-group-append">
                <button type="button" class="btn bg-light"><i class="fas fa-search text-muted"></i></button>
            </div>
            
        </div>
    </form>
    
</div>
</nav>
<script>
  $(document).ready(function(){
$(".monB").click(function(){
});

$(".blanc").css('width','100%');
  $('.blanc').css('height','8px');
  $('.blanc').css('margin-top','8px');
  $('.blanc').css('margin','8px');

})
</script>



