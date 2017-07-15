<?php 
include "db.php";
include "session.php";

if($_POST){
 $edit_id=$_POST['id'];
 $edit_title=$_POST['title'];
 $edit_content=$_POST['content'];
 $edit_class=$_POST['class'];
 
 
$update_notice ="UPDATE notice SET title='$edit_title', content='$edit_content',
class='$edit_class' WHERE id ='$edit_id'";

$update_note = mysqli_query($conn,$update_notice);

}
  header('Location:view_notice.php');
?>
