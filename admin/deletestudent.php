
<!DOCTYPE html>
<html lang=en_US">
<head>
<meta charset="UTF-8">
<title>STUDENT MANAGEMENT SYSTEM</title>
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
      
	        <li class="nav-item">
			   <h4> <a href="admindash.php" class="nav-link text-white">Dashboard</a></h4>
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
		 
	 }
   
</style>

</head>
  <body>
  
  
            <div class="container form-contain">
<h1  class="text-danger" align="center">Delete Student</h1>

<form  method="post" action="">
<div class="row frm"  >  
       <div class="col-md-3">
	   <img src="../images/login.png" class="img-responsive">
	   </div>
	   
	   <div class="col-md-2">
	   
	 <h4>Id :</h4>
	 <h4 class="pass">Standard :</h4>
	 </div>
	 <div class="col-md-3">
	 <input type="text" class="form-control" name="id" placeholder="enter Id"required>
	  
	  
	 <input type="text" class="form-control lbl" name="standard" placeholder="Enter standard">
	 
	 <input class="btn btn-danger lbl" type="submit"  name="submit">
	  </div>
	  </div>
	  
	  </div>
	</form>

</body>
</html>

<?php
       

      if(isset($_POST['submit'])){
     include('../dbcon.php');
	 
	$id=$_POST['id'];
   
	 
	 
	 $qry="SELECT * FROM student WHERE id='$id' ";
	 $run=mysqli_query($con,$qry);
	 $row=mysqli_num_rows($run);
	 echo "$row";
	 if($row < 1){
		 ?><script>
		 alert("Wrong Id");
		 </script><?php
	 }else
	 {
		 $qry="DELETE FROM student WHERE id='$id'";
		 $run=mysqli_query($con,$qry);
		 if($run== true){
		 ?>
		 <script>
		 alert("Data deleted succesfully");
		 </script>
		 <?php
		 
	  } else
		  
	  {   
         
	  }
		  

	  }}

?>
