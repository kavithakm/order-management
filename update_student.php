<?php
include "db.php";
include "session.php";

if($_POST){
 $edit_id=$_POST['id'];
 $edit_name=$_POST['name'];
 $edit_email=$_POST['email'];
 $edit_password=$_POST['password'];
 $edit_contact=$_POST['contact'];
 $edit_group=$_POST['blood_group'];
 $edit_address=$_POST['address'];
 $edit_class=$_POST['class'];
 


$update_query ="UPDATE student_details SET s_name='$edit_name', s_email='$edit_email',
s_password='$edit_password',s_contact='$edit_contact',b_group='$edit_group',s_address='$edit_address',
s_class='$edit_class' WHERE s_id = '$edit_id'";

$update = mysqli_query($conn,$update_query);

}
 header('Location:view_students.php');
?>

 
