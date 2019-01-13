
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



 
  
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
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
	 .tbl{
		 width:700px;
		 border-radius:30px;
		 
		 background-color:;
	 }
   
</style>

</head>
  <body>
  
  
  
      
   <div class="container form-contain">
<h1  class="text-danger" align="center">Update Student Details</h1>

<form  method="post" action="">
<div class="row frm"  >  
       <div class="col-md-3">
	   <img src="../images/login.png" class="img-responsive">
	   </div>
	   
	   <div class="col-md-2">
	   
	 <h4>Id :</h4>
	 <h4 class="pass">Roll no. :</h4>
	 </div>
	 <div class="col-md-3">
	 <input type="text" class="form-control" name="id" required>
	  
	  
	 <input type="text" class="form-control lbl" name="rollno" required>
	 
	 <input class="btn btn-danger lbl" type="submit" value="Search" name="Search">
	  </div>
	  </div>
	  </form>
	  
	 
  



<?php


      if(isset($_POST['Search'])){
     include('../dbcon.php');
	 
	$id=$_POST['id'];
    $roll=$_POST['rollno'];
//	$name= $_POST['name'];
  //  $city=$_POST['city'];
    //$pcon= $_POST['pcont'];
    //$standard=$_POST['standard'];
    	
     	  

	 
	 $qry="SELECT * FROM student WHERE id='$id' AND rollnno='$roll'";
	 
	 $run=mysqli_query($con,$qry);
	 $row=mysqli_num_rows($run);
	 if($row > 0){
		 $data=mysqli_fetch_assoc($run);
		?>
		                      <table align="center"  class="tbl bg-danger" border="2">
					 <tr><th >Image</th><th>Roll</th><td><?php echo $data['rollnno']; ?></td></tr>
					 <tr>
					 <td rowspan="3"> <img  src="../dataimages/<?php echo $data['image'];?>" style="max-height:210px; width:220px;">  </td>
					 <th>Id</th><td><?php echo $data['id']; ?></td></tr>
					<tr> <th>Parents Contact</th> <td><?php echo $data['pcontact']; ?></td></tr>
					<tr> <th>standard</th> <td><?php echo$data['standard'];?></td>
					 </tr>
		             <tr><td colspan="3" align="center"><h4><a class="btn btn-success"style="height:50px" href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></h4></td></tr>			 
                     </table>
					 <?php
					 
	 }else
	 { echo "no row return";	 
	 }
	}
	  ?>
		 
		</div> 
<body>
</html>