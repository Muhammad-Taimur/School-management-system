<?php
      session_start();
	  
	  if(isset($_SESSION["uid"])){
		  if(isset($_SESSION["upass"]))
		  
		 // echo "Welcome  ". $_SESSION["uid"];
		  session_destroy();
		  header('location:index.php');
		  
	  }else{
		  echo "Your session is expired";
		  
	  }
	  
	  echo "<br>";
	  


?>
  <!DOCTYPE html>
<html lang=en_US">
<head>
<meta charset="UTF-8">



</head>
  <body> 
</body>

</html>