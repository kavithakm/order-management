<?php
include 'db.php';
include 'session.php';
include 'header.php';


$delete_record=$_GET['del'];
$delete="DELETE FROM student_details where s_id='$delete_record'";
$delete_query=mysqli_query($conn,$delete);
if ($delete_query) {
    header('Location:view_students.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
include "footer.php";
?>
