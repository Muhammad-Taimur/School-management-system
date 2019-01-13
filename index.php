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
			   <h4> <a href="login.php" class="nav-link text-white">Admin Login</a></h4>
			</li>

</div>		
</div>	
</nav >


<style>
   body{
	   
	   background-image:url('images/img.jpg');
	   background-size: 100% 100%;
	   background-attachment:fixed;
		width:100%;
		height: 660px;
		
   }

</style>
</head>
<body>

   <h1 align="center" style="margin-top:100px;">Student Information</h1>
   <div class="container-fluid">
 <hr style="border: 2px solid black">
   </div>
 
    <form action="" method="post" class="form">
      <div class="row">
	  <div class="col-sm-1">
     <h3>Standard: </h3>
	 </div>
	 <div class="col-sm-2">
	 <input style="width:270px;"   class="form-control"type="text" name="standard" placeholder="Enter standard">
	 </div>
	 
	   
	  <div class="col-sm-1">
     <h3>Roll no: </h3>
	 </div>
	 <div class="col-sm-2">
	 <input style="width:270px;"  class="form-control" type="text" name="rollno" placeholder="Enter Roll no.">
	 </div>
	  
	  <div class="col-sm-1">
	  <input type="submit" name="submit" value="search">
	  </div>
	  </div>
	 
	
    </form> 
 
 </body>
</html>




<?php


      if(isset($_POST['submit'])){
     
	 $standard=$_POST['standard'];
	
    $roll=$_POST['rollno'];
	
	include('dbcon.php');
    
  	 $qry="SELECT * FROM student WHERE standard='$standard' AND rollnno='$roll'";
	
	
	  $run=mysqli_query($con,$qry);
	  $row=mysqli_num_rows($run);
	  
	  if($row >0){
		  
		  $data=mysqli_fetch_assoc($run);
		  
		  
		  ?>
		     
		              <div class="container mr">
		                      <table  border="3" width="70%" height="60%";>
					 <tr><th >Image</th><th>Roll</th><td><?php echo $data['rollnno']; ?></td></tr>
					 <tr>
					 <td rowspan="3"> <img  class="img-responsive" src="dataimages/<?php echo $data['image'];?>" style="max-height:210px; width:220px;">  </td>
					 <th>Id</th><td><?php echo $data['id']; ?></td></tr>
					<tr> <th>Parents Contact</th> <td><?php echo $data['pcontact']; ?></td></tr>
					<tr> <th>standard</th> <td><?php echo$data['standard'];?></td>
					 </tr>			 
                     </table>					
					 
		  <?php
	  }
	  else
	  {   ?>
             <h2 style="margin-top:60px;"align="center" ><?php echo "No record found"; ?></h2>
			 <?php
	  }
	  }
?>

</div>