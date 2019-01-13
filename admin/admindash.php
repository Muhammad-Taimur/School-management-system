<?php
   session_start();
 if(!isset($_SESSION["uid"])){
	 if(!isset($_SESSION["upass"]))
	 header('location:admindash.php');
	
 exit();}
 
	 
	 
 
 ?>

<!DOCTYPE html>
<html lang=en_US">
<head>
<meta charset="UTF-8">
<title>Dash Board</title>
<link rel="stylesheet"  type="text/css" href="css/mystyle.css" >

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial=scale=1" >



 
  
   <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
	 <div class="container">
	     <h1 class="navbar-brand font-weight-bold text-danger">SCHOOL MANAGEMENT SYSTEM</h1>
		  		   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
           <span class="navbar-toggler-icon"></span>
</button>
<div  class="collapse navbar-collapse" id="collapsenavbar">
         <ul class="navbar-nav ml-auto" >
			<li class="nav-item">
			   <h4> <a href="../logout.php" class="nav-link text-white">Logout</a></h4>
			</li>


</div>		
</div>	
</nav >

<style>


body{
	   
	   background-image:url('../images/img.jpg');
	   background-size: 100% 100%;
	   background-attachment:fixed;
		width:100%;
		height: 660px;
		
   }
   .form-contain{
		margin-top:100px;
		background:rgba(0,0,0, .6);
 		color:white;
		border-radius:50px;
		height:400px;
	}
	
	 .form-contain input{
		 width:200px;
	 }
	 
	 .frm{
		 margin-top:40px;
		 
	 }
	 .pass{
		 margin-top:45px;
	 }
	 .lbl{
		 margin-top:30px;
		height:50px;
        width:300px;		
	 }
</style>
</head>

<body>



 <div class="container form-contain">
<h1  class="text-danger" align="center">Admin Dashboard</h1>


<div class="row frm"  >  
       <div class="col-md-3">
	   <img src="../images/images.jpg" class="img-responsive">
	   </div>
	   
	   
	 <div class="col-md-3">
	 
	   <a class="btn btn-danger lbl" href="addstudent.php" value="Add Student">Add student</a>
	   
	   <a class="btn btn-danger lbl" href="deletestudent.php" >Delete student</a>
       <a class="btn btn-danger lbl" href="updatestudent.php">update student</a>
        
	  
	 
	 
	 
	  </div>
	  </div>
	  
	  </div>
	 


</body>

</html>



