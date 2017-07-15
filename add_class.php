<?php
include "db.php";
include "session.php";
include "header.php";
if($_POST){
$add_class=$_POST['class'];

$insert_class="INSERT INTO standard1(new_class)values('$add_class')";
$insert=mysqli_query($conn,$insert_class);
// $add_class=mysqli_query($conn,$select_class);
// if (mysqli_num_rows($add_class) > 0) {
// while($rows=mysqli_fetch_row($add_class)){
// 	$rows[7]=$add_class;
// }
}
?>
<script src="js/add_classVal.js"></script>
<form id="add_classDetails" class="form-horizontal" method="post" action="add_class.php">
    <h3 style="text-align:center">ADD CLASS<img src="image/school1.jpg" width="100" height="80"></h3>

<div class="form-group">
  <label class="col-md-4 control-label">Student Class</label>  
  <div class="col-md-4">
  <input id="class" name="class" type="text"  placeholder="Add student class" class="form-control input-md"> 
  <span id="classErr" style="color:red"></span>
  </div>
  <div class="form-group">
        <div class="col-md-4">
            <input id="update" type="submit" name="update" class="btn btn-success" value="ADD">
        </div>
  </div>
  
</div>
<div> kavithakm
</div>

</form>
<?php

// }
include "footer.php";
?>