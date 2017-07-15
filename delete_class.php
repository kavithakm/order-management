<?php
include "db.php";
include "session.php";
include "header.php";
if($_POST){
	

}
?>
<div class="container">
  <h2 style="text-align:center">VIEW STUDENT CLASS</h2>           
  <table class="table table-bordered table-hover">
    
      <tr class="warning">
        <th>SERIAL NO</th>
        <th>STANDARD(CLASS)</th>
        <th>DELETE</th>        
      </tr>
    <?php 
    	$view_class="SELECT * FROM standard1";
    	$viewAndDel=mysqli_query($conn,$view_class);
    	while ($rows=mysqli_fetch_array($viewAndDel)) {
    		$id=$rows[0];
    		$class=$rows[1];
    	
    ?>
    
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $class?></td>
        <td><a href="deleteClass.php?dele=<?php echo $id ; ?>">Delete</a></td>

	  </tr>
        <?php
    	}
    	?>
  </table>
  <div class="col-md-4">
    <!-- <label class="col-md-4 "</label> -->
    <a href="admin_home.php" class="btn btn-success">Back</a>
  </div> 
</div>
<?php
include "footer.php";
?>
      

