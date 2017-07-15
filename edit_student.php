<?php
include "db.php";
include "session.php";
include "header.php";

$edit_record = $_GET['edit'];
$edit_oper= "SELECT * FROM student_details where s_id='$edit_record'";

$results1 = mysqli_query($conn,$edit_oper);
if (mysqli_num_rows($results1) > 0) {
    while ($rows = mysqli_fetch_row($results1)) {
        $edit_id = $rows[0];
        $edit_name = $rows[1];
        $edit_email = $rows[2];
        $edit_password = $rows[3];
        $edit_contact = $rows[4];
        $edit_group = $rows[5];
        $edit_address = $rows[6];
        $edit_class = $rows[7];
        // $fee=$_POST['fee'];
        // $s_result=$_POST['result'];
        ?>
        <script src="js/edit_detailsVal.js"></script>
        <form id="edit_student" class="form-horizontal" method="post" action="update_student.php">
            <h3 style="text-align:center">STUDENT DETAILS<img src="image/cute.jpg" width="100" height="80"></h3>
            <fieldset>
              <div class="form-group">
                    <label class="col-md-4 control-label" for="id"></label>  
                    <div class="col-md-4">
                        <input type="hidden" name="id" value="<?php echo $edit_id; ?>"> 
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Student Name</label>  
                    <div class="col-md-4 " >
                        <input id="editName" type="text" class="form-control input-md" name="name" value="<?php echo $edit_name; ?>">
                        <span id="editNameErr" style="color:red"></span> 
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Student Email</label>  
                    <div class="col-md-4">
                        <input id="editEmail" type="text" name="email" class="form-control input-md" value="<?php echo $edit_email; ?>">
                        <span id="editEmailErr" style="color:red"></span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">Student Password</label>
                    <div class="col-md-4">
                        <input id="editPassword" type="text" name="password" class="form-control input-md" value="<?php echo $edit_password; ?>">
                        <span id="editPasswordErr" style="color:red"></span> 
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="contact">Contact no.</label>  
                    <div class="col-md-4">
                        <input id="editContact" type="text" name="contact" class="form-control input-md" value="<?php echo $edit_contact; ?>">   
                        <span id="editContactErr" style="color:red"></span>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
                    <div class="col-md-4">
                        <select id="editBlood_group" name="blood_group" class="form-control" >
                            <!-- <option>Select</option> -->
                            <option><?php echo $edit_group; ?></option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="O-">O-</option>
                        </select>
                        <span id="editBlood_groupErr" style="color:red"></span>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="address">Address</label>  
                    <div class="col-md-4">
                        <input id="editAddress" type="text" name="address" class="form-control input-md" value="<?php echo $edit_address; ?>">
                        <span id="editAddressErr" style="color:red"></span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="area">Class</label>  
                    <div class="col-md-4">
                        <select id="editClass" name="class" class="form-control" required>
                            <option><?php echo $edit_class; ?></option>
                             <?php 
                             echo $extract;
                            $extract="SELECT * FROM standard1";
                            $extracted=mysqli_query($conn,$extract);
    
    
                             while ($rows=mysqli_fetch_array($extracted)){
                                $s_class=$rows[1];
                                ?>
    
                    <option value='<?php echo $s_class; ?>'><?php echo $s_class;?></option>
                    <span id="editClassErr" style="color:red"></span>
                    <?php 
                     }
     
                     ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="update"></label>
                    <div class="col-md-4">
                        <input type="submit" id="update" name="update" class="btn btn-success" value="Update">
                    </div>
                    <div class="col-md-4">
                        <!-- <label class="col-md-4 " for="logout"></label> -->
                        <a href="admin_home.php" class="btn btn-success">Back</a>
                    </div>
                </div>

            </fieldset>

        </form>

        <?php
      }
    }
        include "footer.php";
        ?>