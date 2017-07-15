<?php
include "db.php";
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  
      <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
<body>
	

<div class="container">
	<h2 style="text-align:center">VIEW NOTICE BOARD</h2>
	<table class="table table-bordered table-hover">
	<tr class="success">
		<th>TITLE </th>
		<th>CONTENT</th>
		<th>CLASS</th>
		

	</tr>

	
	<?php
	//$row['s_class']=$_SESSION['a_name'];
    $class=$_SESSION['class'];
	
	$view_notice="SELECT * FROM notice where class='$class' or class='ALL'";
	$views = mysqli_query($conn, $view_notice);
		if (mysqli_num_rows($views) > 0) {
    	while($rows = mysqli_fetch_row($views)) {
			$title = $rows[1];
			$content = $rows[2];
			$class = $rows[3];
	?>
	<tr>
	 	<td><?php echo $title ; ?> </td>	
		<td><?php echo $content ; ?></td>
		<td><?php echo $class ; ?></td>

		
		
	</tr>
	 <?php
}
}
?>
</table>
 
 <div class="form-group">
    <div class="col-md-4 col-md-offset-8">
    <center><button class="btn btn-success"><a href="logout.php">Logout</a></button></center>
  </div> 
</div>
</div>
</body>
</html>
