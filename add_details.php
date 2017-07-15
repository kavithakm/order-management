<?php
include "db.php";
include "session.php";
include "header.php";

$select_classEr="";
if(!empty($_POST)) {
 $s_name=$_POST['name'];
 $s_email=$_POST['email'];
 $s_password=$_POST['password'];
 $s_contact=$_POST['contact'];
 $b_group=$_POST['blood_group'];
 $s_address=$_POST['address'];
 $s_class=$_POST['select_class'];
 
    // if (isset($s_class)=="Select") {
    //     $select_classEr="error";
    //     // echo $select_classEr;
        
    // }


      
$sql="INSERT INTO student_details(s_name,email,password,s_contact,b_group,s_address,s_class)values('$s_name','$s_email',
  '$s_password','$s_contact','$b_group','$s_address','$s_class')";
$res=mysqli_query($conn,$sql);


}
?>


  <form id="add_details" class="form-horizontal" method="post" action="add_details.php">
    <h3 style="text-align:center">STUDENT DETAILS<img src="image/cute.jpg" width="100" height="80"></h3>
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" >Student Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Enter student name" class="form-control input-md">
  <span id="nameErr" style="color:red"></span> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Student Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="Enter student email id" class="form-control input-md">
  <span id="emailErr" style="color:red"></span>  
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="password">Student Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md">
    <span id="passwordErr" style="color:red"></span>   
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact no.</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="Enter student contact no." class="form-control input-md">
  <span id="contactErr" style="color:red"></span>   
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
  <div class="col-md-4">
    <select id="blood_group" name="blood_group" class="form-control">
      <option  value="">Select</option>
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="AB+">AB+</option>
      <option value="O+">O+</option>
      <option value="A-">A-</option>
      <option value="B-">B-</option>
      <option value="AB-">AB-</option>
      <option value="O-">O-</option>
    </select>
    <span id="blood_groupErr" style="color:red"></span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>  
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="Enter student address" class="form-control input-md">
  <span id="addressErr" style="color:red"></span>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Class</label>  
  <div class="col-md-4">
  <select id="select_class" name="select_class" class="form-control">
     <option value="">Select</option>
     
    <?php 
    $extract="SELECT * FROM standard1";
    $extracted=mysqli_query($conn,$extract);
    
    
    while ($rows=mysqli_fetch_array($extracted)){
    $s_class=$rows[1];
    ?>
    
    <option value='<?php echo $s_class; ?>'><?php echo $s_class;?></option>
      <?php 
       }
     
    ?>
    <option value="All">All</option>
    </select>
    <span id="select_classErr" style="color:red"></span>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="register"></label>
  <div class="col-md-4">
    <input  name="register" type="submit" class="btn btn-success" value="Register">
  </div>
  <div class="col-md-4">
    <!-- <label class="col-md-4 "</label> -->
    <a href="admin_home.php" class="btn btn-success">Back</a>
  </div>
</div>
</fieldset>
</form>
<script src="js/add_detailsVal.js">
</script>
<?php

include "footer.php";
?>
