<?php
include 'db.php';
include 'session.php';
include 'header.php';


$delete_notice=$_GET['del'];
$delete_note="DELETE FROM notice where id='$delete_notice'";
$delete=mysqli_query($conn,$delete_note);
if ($delete) {
    header('Location:view_notice.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
include "footer.php";
?>