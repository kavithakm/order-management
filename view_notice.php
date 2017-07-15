<?php
include "db.php";
include "session.php";
include "header.php";
?>
<div class="container">
<table class="table table-bordered table-hover">
		<h3 style="text-align:center">VIEW STUDENTS DETAIL</h3>
		<tr class="info">
			<th>ID</th>
			<th>TITLE</th>
			<th>CONTENT</th>
			<th>CLASS</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
	<?php 
		$view_notice="SELECT * FROM notice";
		$views = mysqli_query($conn, $view_notice);
		if (mysqli_num_rows($views) > 0) {
    	while($rows = mysqli_fetch_row($views)) {
    		
			$id = $rows[0];
			$title = $rows[1];
			$content = $rows[2];
			$class = $rows[3];
	?>
		<tr>
			<td><?php echo $id ; ?></td>
			<td><?php echo $title ; ?></td>
			<td><?php echo $content ; ?></td>
			<td><?php echo $class ; ?></td>
			<td><a href="edit_notice.php?edit=<?php echo $id ;?> ">Edit</a></td>
			<td><a href="delete_notice.php?del=<?php echo $id ; ?>">Delete</a></td>
		</tr>
<?php
	}
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