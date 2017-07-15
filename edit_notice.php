<?php
include "db.php";
include "session.php";
include "header.php";

$edit_notice=$_GET['edit'];
$edit="SELECT * FROM notice where id='$edit_notice'";
$edit_note=mysqli_query($conn,$edit);
while($rows=mysqli_fetch_row($edit_note)){
	$id=$rows[0];
	$title=$rows[1];
	$content=$rows[2];
	$class=$rows[3];
}
?>
<script src="js/edit_noticeVal.js">
  
</script>
 <form id="edit_notice1" class="form-horizontal" method="post" action="update_notice.php">
 	<h3 style="text-align:center">NOTICE BOARD<img src="image/images.jpg" width="100" height="80"></h3>
<div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-4">
  <input id="id" name="id" type="hidden" value="<?php echo $id; ?>"> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">TITLE :</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Title" class="form-control input-md" value="<?php echo $title; ?>">
  <span id="titleERR" style="color:red"></span> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">CONTENT:</label>
  <div class="col-md-4">
  <textarea type="text" class="form-control input-md" rows="5"  id="content" name="content"><?php echo $content; ?></textarea>
  <span id="contentERR" style="color:red"></span>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Class</label>  
  <div class="col-md-4">
  <select id="class" name="class" class="form-control">
      <option><?php echo $class; ?></option>
      <?php 
    $extract1="SELECT * FROM standard1";
    $extracted1=mysqli_query($conn,$extract1);
    
    while ($rows=mysqli_fetch_array($extracted1)){
    $s_class=$rows[1];
    ?>
    
    <option value='<?php echo $s_class; ?>'><?php echo $s_class;?></option>
      <?php 
       }
     
    ?>
    <option value="ALL">ALL</option>
    </select>
    <span id="classERR" style="color:red"></span>
  </div>
</div>
<div class="form-group">
	<label class="col-md-4 control-label"></label>
	<div class="col-md-4">
    	<input type="submit" id="update" name="update" class="btn btn-success" value="UPDATE NOTICE">
  	</div>
  </div>
</form>