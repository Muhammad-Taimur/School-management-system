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
<body class="bdy">


<div class="container fm">
<div class="row">
<div class="col-md-8 col-md-offset-3 frm"  >
<form class="form"method="post" action="">
             
       <center > <h3>Student Information</h2></center>
	   <hr style="border:2px solid black;">
	   <br>
	   <div class="row">
       <div class="col-sm-2">
      <h3> Standard:</h3>
        </div>	  

         <div class="col-sm-3">
	              <input type="text" name="standard" placeholder="Standard" required>
       
        </div>	 		
      
<div class="col-sm-2">
      <h3> Roll:</h3>
        </div>	  

         <div class="col-sm-3">
	              <input type="text" name="rollno" required>
       
        </div>	 		
      
      <div class="col-sm-2">
	             <input type="submit" name="submit" value="submit">
       
        </div>




</div>
</table>
</form>
</div>
</div>
</div>

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
		  
		  
		                      <table align="center" border="1" width="40%";>
					 <tr><th >Image</th><th>Roll</th><td><?php echo $data['rollnno']; ?></td></tr>
					 <tr>
					 <td rowspan="3"> <img  src="dataimages/<?php echo $data['image'];?>" style="max-height:210px; width:220px;">  </td>
					 <th>Id</th><td><?php echo $data['id']; ?></td></tr>
					<tr> <th>Parents Contact</th> <td><?php echo $data['pcontact']; ?></td></tr>
					<tr> <th>standard</th> <td><?php echo$data['standard'];?></td>
					 </tr>			 
                     </table>					 
		  <?php
	  }
	  else
	  {   ?>
             <h4><?php echo "No record found"; ?></h4>
			 <?php
	  }
	  }
?>