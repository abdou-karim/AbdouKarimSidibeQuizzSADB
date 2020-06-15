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