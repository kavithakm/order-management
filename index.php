<?php
session_start();
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  
     <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>
    
</head>
<body>
	<?php 
	
	if(!empty($_POST)) {
		
		$admin_email=$_POST['email'];
		$admin_password=$_POST['password'];
		$student_email=$_POST['email'];
		$s_password=$_POST['password'];


  	   


	$query="SELECT * FROM admin where email_id='$admin_email' and password='$admin_password'";
	$result=mysqli_query($conn,$query);

	if (mysqli_num_rows($result) > 0) {
	$_SESSION['a_name'] =$admin_email;
	$_SESSION['password']=$admin_password;
    header('Location:admin_home.php');
    }

    $query1="SELECT * FROM student_details where email='$student_email' and password='$s_password'";
	$result1=mysqli_query($conn,$query1);	
	
	if (mysqli_num_rows($result1) > 0) 
	{
		while ($row=mysqli_fetch_array($result1)) {
			
	    $_SESSION['class']=$row['s_class'];
	}	
	
    header('Location:std_view_notice.php');
}

}
	?>
	<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form method="post" action="index.php" id="loginForm">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input id="email" class="form-control" placeholder="E-mail" name="email" type="text">
			    		    <span id="emailErr" style="color:red"></span>
			    		</div>
			    		<div class="form-group">
			    			<input id="password" class="form-control" placeholder="Password" name="password" type="password" >
			    			<span id="passwordErr" style="color:red"></span>
			    		</div>
			    		

			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>  
</body>
</html>