<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  
      <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/login.js" ></script>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">ADMIN HOME</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students Details <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_details.php">Add Students details</a></li>
          <li><a href="view_students.php">View Students details</a></li>
         <!--  <li><a href="edit_student.php">Edit Students details</a></li>
          <li><a href="delete_student.php">Delete Students details</a></li> -->
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Notice Board <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_notice.php">Add Notice board</a></li>
          <li><a href="view_notice.php">View Notice board</a></li>
          <!-- <li><a href="edit_notice.php">Edit Notice board</a></li>
          <li><a href="delete.php">Delete Notice board</a></li> -->
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add Details <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_class.php">Add Student Class</a></li>
          <li><a href="delete_class.php">Delete Student Class</a></li>
        </ul>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <a href="logout.php" class="btn btn-info btn-lg">
          Log out
        </a>
    </ul>
    
  </div>
</nav>