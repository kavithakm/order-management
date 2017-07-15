<?php
include "db.php";
include "header.php";

$delete_cs=$_GET['dele'];
$del="DELETE FROM standard1 where id='$delete_cs'";
$delClass=mysqli_query($conn,$del);
if($delClass){
	header('Location: delete_class.php');
}
else{
	echo "error" .mysqli_error($conn);
}
include "footer.php";
?>