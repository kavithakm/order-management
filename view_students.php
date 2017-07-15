<?php
include "db.php";
include "session.php";
include "header.php";

?>
<div class="container">
	<table class="table table-bordered table-hover piechart-key">
		<h3 style="text-align:center">VIEW STUDENTS DETAIL</h3>
		<tr class="success">
			<th>S_ID</th>
			<th>S_NAME</th>
			<th>S_EMAIL</th>
			<th>S_PASSWORD</th>
			<th>CONTACT NO</th>
			<th>BLOOD GROUP</th>
			<th>S_ADDRESS</th>
			<th>S_CLASS</th>
			<th>EDIT</th>
			<th>DELETE</th>
			
		</tr>
		<?php
		
		
		$view = "SELECT * FROM student_details";

		$results = mysqli_query($conn, $view);
		if (mysqli_num_rows($results) > 0) {
    	while($rows = mysqli_fetch_row($results)) {
    		
			$s_id = $rows[0];
			$s_name = $rows[1];
			$s_email = $rows[2];
			$s_password = $rows[3];
			$contact = $rows[4];
			$blood = $rows[5];
			$address = $rows[6];
			$class = $rows[7];
			// $edit = $rows[8];

			
			
		
			?>
			<tr>
			<td><?php echo $s_id ; ?></td>
			<td><?php echo $s_name ; ?></td>
			<td><?php echo $s_email ; ?></td>
			<td><?php echo $s_password ; ?></td>
			<td><?php echo $contact ; ?></td>
			<td><?php echo $blood ; ?></td>
			<td><?php echo $address ; ?></td>
			<td><?php echo $class ; ?></td>
			<!-- <td><?php echo $pending ; ?></td> 
			<td><?php echo $result ; ?></td> -->
			<td><a href='edit_student.php?edit=<?php echo $s_id; ?>'>Edit</a></td>
			<td><a href='delete_student.php?del=<?php echo $s_id; ?>'>Delete</a></td>
		</tr>
		<?php
		}
	}

		?>
		
	</table>
	<!-- <a href="logout.php">LOGOUT</a> -->
	<div class="col-md-4">
    <!-- <label class="col-md-4 "</label> -->
    <a href="admin_home.php" class="btn btn-success">Back</a>
    </div> 

</div>

</body>
</html>
<?php 
include "footer.php";
?>
