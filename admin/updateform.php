<?php 

  include('../dbcon.php');
  $kid= $_GET['sid'];
  
  $qry="SELECT * FROM student WHERE id='$kid'";
  
  $run=mysqli_query($con,$qry);
  if($run== true){
	  $data=mysqli_fetch_assoc($run);
	  $id=$data['id'];
  echo "<br>".$id;
  }

?>
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
    <h2 align="right"><a href="admindash.php">Dashboard</a></h2>

    <h2 align="center">Update STUDENT DETAILS</h2>
<form method="post"  action="" enctype="multipart/form-data">
    <table align="center"  border="1" width="30%">
       <tr> <td colspan="2" align="center"><h3>Student Information</h3></td></tr>
         

	   <tr>
<td>Roll no.</td><td><input type="text" name="rollno" value="<?php echo $data['rollnno']; ?>" required></td>
</tr>

<tr>
<td>Name</td><td><input type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
</tr>

<tr>
<td>City</td><td><input type="text" name="city" value="<?php echo $data['city']; ?>" required></td>
</tr>

<tr>
<td>Parents Contact</td><td><input type="text" name="ppp" value="<?php echo $data['pcontact']; ?>" required></td>
</tr>

<tr>
<td>standard</td><td><input type="text" name="standard" value="<?php echo $data['standard']; ?>" required></td>
</tr>



<tr>
<td>Image</td><td>    <input type="file" name="imgname" value="<?php echo $data['image']; ?>" required></td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td> 
</tr>

</table>
</form>



<?php


      if(isset($_POST['submit'])){
     
	 
	
    $roll=$_POST['rollno'];
	
	$name= $_POST['name'];
	
    $city=$_POST['city'];
	
    $pcontact = $_POST['ppp'];
    $standard=$_POST['standard'];
    	
     	  
$imgnamep=$_FILES['imgname']['name'];

$tempname=$_FILES['imgname']['tmp_name'];	     
	 
  
  	 
	 move_uploaded_file($tempname,"../dataimages/$imgnamep");
	 
	 $qry="UPDATE student SET rollnno='$roll',name='$name',city='$city',pcontact='$pcontact',standard='$standard',image='$imgnamep' WHERE id='$kid'";
	 
	 $run=mysqli_query($con,$qry);
	 
	 if($run== true){
		 header('location:updatestudent.php');?>
		 
		 <script>
		 alert("Data Updated succesfully");
		 </script>
		 <?php
		 
	  } else
	  {   
         echo "Data is not Updated";
	  }
		  

	  }

?>
</body>
</html>