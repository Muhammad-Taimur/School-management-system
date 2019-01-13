
<!DOCTYPE HTML>
<html lang=en_US"> 

<head>
<meta charset="UTF-8">
<title> LOGIN Page</title>

</head>

<body>
<h2 align="center">Add new Admin</h2>

<form  method="post" action>
 <table align="center">
     <tr>
	 <td>ID</td><td><input type="text" name="id" required></td>
	 </tr>
     <tr>
	 <td>Username</td>
	 <td><input type="text" name="uname" required></td>
	  </tr>
	  
	  <tr>
	  <td>Password</td>
	  <td><input type="password" name="pass" required></td>
	  </tr>
	  
	  <tr>
	  <td colspan="2" align="center"><input type="submit" value="login" name="submit"></td>
</tr>


</table>
</form>

  
</body>
</html>

<?php
include('dbcon.php');
       if(isset($_POST['submit']))
	   {
		   $id=$_POST['id'];
		   $uname=$_POST['uname'];
		   $passd=$_POST['pass'];
		   echo "Form submitted";
		   
		  $qry="INSERT INTO admin(`id`, `username`, `password`) VALUES ('$id','$uname','$passd')";
		  $run=mysqli_query($con,$qry);
		  
		  if($run==true){
			  header('location:login.php');
			  ?>
			  <script>
			  alert("your account has been created succesfullly login here ");
			  </script>
			  <?php
			  
		  }
		  else{
			  
			  echo "Registration Failed !";
			  
		  }
		   
		   
		   
		   
		   
		   
	   }



?>
   
