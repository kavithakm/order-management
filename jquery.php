 <html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style type="text/css">
    #input_id:focus{
    border-color: #cccccc;
    -webkit-box-shadow: none;
    box-shadow: none;
}	</style>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  
      <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
 	$(document).ready(function(){
 	$("#input_id").css("border", "1px solid black");
 	$("#input_id").focus(function(){
        $(this).css("border","1px solid red");
    });
    $("#input_id").keyup(function(){
    	
        if($(this).val().length < 4) {
        $(this).css("border", "green");
        	
    } else if($(this).val().length==4){ 
     $(this).css("border", "1px solid brown");
 }
 else{
 	$(this).css("border", "1px solid yellow");
 }

    });
});
 </script>
</head>
<body>
    <form id="form_id" method="post" action="jquery.php">
     <input id="input_id" name="name" value="" > 
    </form>
  
</body>
</html>