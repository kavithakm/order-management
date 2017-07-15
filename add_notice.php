<?php
include "db.php";
include "session.php";
include "header.php";
if($_POST){
	$title=$_POST['title'];
	$content=$_POST['content'];
	$class=$_POST['class'];

	$notice="INSERT INTO notice(title,content,class)values('$title','$content','$class')";
	$query=mysqli_query($conn,$notice);

}

?>
<script src="js/add_noticeVal.js"></script>
 <form id="add_notice1" class="form-horizontal" method="post" action="add_notice.php">
 	<h3 style="text-align:center">NOTICE BOARD<img src="image/images.jpg" width="100" height="80"></h3>

<div class="form-group">
  <label class="col-md-4 control-label">TITLE :</label>  
  <div class="col-md-4">
  <input id="name" name="title" type="text" placeholder="Title" class="form-control input-md">
  <span id="nameErr" style="color:red"></span> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">CONTENT:</label>
  <div class="col-md-4">
  <textarea class="form-control input-md" rows="5"  id="content" name="content"></textarea>
  <span id="contentErr" style="color:red"></span>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="area">Class</label>  
  <div class="col-md-4">
  <select id="class" name="class" class="form-control" >
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
    <option value="ALL">ALL</option>
    </select>
    <span id="classErr" style="color:red"></span>
  </div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label"></label>
	<div class="col-md-4">
    	<input type="submit" id="register" name="add" class="btn btn-success" value="ADD NOTICE">
  	</div>
  
   <div class="col-md-4">
    <!-- <label class="col-md-4 "</label> -->
    <a href="admin_home.php" class="btn btn-success">Back</a>
  </div>
</div>
</form>