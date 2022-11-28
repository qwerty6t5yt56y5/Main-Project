<?php
require ("connect.php");
session_start();

if(isset($_POST["submit"])){


$usname=$_POST['username'];
$usemail=$_POST['email'];
$phn=$_POST['phone'];
$password=$_POST['password'];

<<<<<<< Updated upstream
        $emsql="select * from sign_up where Email='$usemail'";

      $emres=mysqli_query($conn,$emsql);

      if (mysqli_num_rows($emres) > 0) {
        
       
              $emailerror="email already exist";
              echo"<script> alert('this email already exists')</script>";
              
        }
      else{
        $enpass=base64_encode($password);
        $sql = "INSERT INTO sign_up(Name,Email,Pass,phn_number) value ('$usname','$usemail','$enpass','$phn')";
      
        $query=mysqli_query($conn,$sql);
       // $last_id = mysqli_insert_id($conn);
          

		if(!$query){
         echo "not";
		}else{
            header("Location:login.php");
        }
    }
        
    
}
=======

$enpass=base64_encode($password);
$sql = "INSERT INTO sign_up(Name,Email,Pass,phn_number) value ('$usname','$usemail','$enpass','$phn')";

$query=mysqli_query($conn,$sql);
// $last_id = mysqli_insert_id($conn);
>>>>>>> Stashed changes


if(!$query){
echo "not";
}else{
header("Location:login.php");
}


}
?>

<html>
    <head><title>sign_up page</title>
    <link rel="stylesheet" href="signup-styles.css">
	
	

<script>  
            function verifyPassword() 
            {  
            var pw = document.getElementById("password").value;  
            var conpw=document.getElementById("password2").value;
            var phon=document.getElementById("phone").value;

            if(phon.length>10 || phon.length<10)
            {
                alert("Incorrect Phone Number Limit !");
                
            }
            
            if(pw == "") 
            {  
                alert("No Blank Passwords Allowed");  
                
            }  
            
            if(pw.length < 8) {  
                alert("Password is less than 8 charecters");   
            
            }  
        
            if(pw.length > 15) {  
                alert("Password exceeds Limit"); 
                
            } 
            
            
            if(pw==conpw)
            {
                alert("Password Confirmed !");
            }
            else
            {

                alert("Password Confirmation Incorrect!");
            
            }
            
        }
            </script>
            </head>
    <body>
       
    <div class="container">
	<div class="header">
		<h2 style='color:white'>Create Account</h2>
	</div>
	<form id="form" class="form" action="#" method='POST'>
		<div class="form-control">
			
			<input type="text" placeholder="Enter your name" id="username" name="username" required />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			
			<input type="email" placeholder="email" id="email" name="email"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			
			<input type="text" placeholder="Phone" id="phone" name="phone"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			
			<input type="password" placeholder="Password" id="password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			
			<input type="password" placeholder="Re-enter your password" id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="sub">
		 <input type="submit" value="submit" name="submit" onclick=verifyPassword()  ><br>
        </div>
		<span style='text-align: center; color:white'>Already have an account?</span><a href="login.php" > Login</a>
	</form>
</div>

</body>
</html>