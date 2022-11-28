<?php

session_start();
$username=$_SESSION['username'];
$userid=$_SESSION['userid'];
include("connect.php");
if(isset($_POST['submit'])){
   
  
    $dob=$_POST['dob'];
    $time=$_POST['time'];
    $addr=$_POST['address'];
    $state=$_POST['state'];
    $dist=$_POST['district'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $exp=$_POST['exp'];
   $gender=$_POST['gender'];
   
    
    $doberror=$housenameerror=$cityerror=$pincodeerror=$staterror=$pincodeerror=$gendererror=$experror=NULL;
    if(empty($dob)){
        $doberror="Please select correct Date of Birth";
    }
    if(empty($addr)){
        $housenameerror="Please enter the address";
    }
   
   
    if (!preg_match("/^([a-zA-Z' ]+)$/",$city)){
        $cityerror="city name should not contain any special characters";
    }
        
    if(empty($state))
       {
        $staterror="Please choose an option";
    }

    if(empty($pincode)){
        $pincodeerror="Please enter the pincode";
    }elseif (!preg_match("/^([0-9' ]{6})$/",$pincode)){
        $pincodeerror="invalid pincode";
    }
    if(empty($gender)){
        $gendererror="Please select correct gender";
    }
    if(empty($exp)){
        $experror="Please select yes if you have experience ";
    }
    if( !$doberror &&!$housenameerror &&!$cityerror &&!$pincodeerror &&!$staterror &&!$pincodeerror &&!$gendererror &&!$experror )
    {

    
                $sql="INSERT INTO volunteer_tbl(dob,time_contact,address,state,district,city,pincode,experience,gender,userid) VALUES('$dob','$time','$addr','$state','$dist','$city','$pincode','$exp','$gender','$userid')";
                $result=mysqli_query($conn,$sql);
                if($result){
               header("Location:confirmation.php");
                }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
    href="volunteer_style.css">
    

</head>
<body>
    
    <?php
    include('header.php');?>
     <div class="cont" id="body">
   
    <div class="volImage"><img src="volunteer.jpg"></div>
    <div class="volForm" >        
    <form action="#" method="POST"> 
        <h1>Welcome <?php echo $username;?> </h1>  
        <h1>VOLUNTEER REGISTRATION </h1>
        <div class="user">
                     
                    <div class="input-box">
                        <span class="details">Date Of Birth</span>
                        <input type="date" name="dob" placeholder="Enter your dob" required> 
                        <span style='color:red;font-size:small;'><?php if(isset($dob))echo $doberror ?><br></span>

                    </div>
                    <div class="input-box">
                        <span class="details">Best time to contact</span>
                        <input type="text" name="time" placeholder="ex. 5-7pm "required> 

                        
                    </div>
                    <div class="input-box">
                        <span class="details">Address Line 1</span>
                        <input type="text" name="address" placeholder="Address line"required> 
                        <span style='color:red;font-size:small;'><?php if(isset($addr))echo $housenameerror ?><br></span>
                    

                    </div>
                    
                    <div class="input-box">
                        <span class="details">State</span>
                       
                        <select name="state" id="state" required>
                        <option value="" disabled selected>Select State</option>
                        <option value="Kerala">Kerala</option>
</select>
                        <span style='color:red;font-size:small;'><?php if(isset($state))echo $staterror ?><br></span>
                    

                    </div>
                    <div class="input-box">
                        <span class="details">District</span>
                        <select name="district" id="dist" required>
                        <option value="" disabled selected>Select District</option>
                        <option value="Alappuzha">Alappuzha</option>
                        <option value="Ernakulam">Ernakulam</option>
                        <option value="Idukki" >Idukki</option>
                        <option  value="Kannur">Kannur</option>
                        <option  value="Kasargode">Kasargode</option>
                        <option value="Kollam">Kollam</option>
                        <option value="Kottayam">Kottayam</option>
                        <option value="Kozhikkodu">Kozhikkodu</option>
                        <option value="Malappuram" >Malappuram</option>
                        <option  value="Palakkadu">Palakkadu</option>
                        <option value="Pathanamthitta"  >Pathanamthitta</option>
                        <option value="Thiruvananthapuram" >Thiruvananthapuram</option>
                        <option value="Thrissur" >Thrissur</option>
                        <option value="Wayanadu">Wayanadu</option>

                      </select>
                 


                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" name="city" placeholder="Enter your city"required> 
                        <span style='color:red;font-size:small;'><?php if(isset($city))echo $cityerror ?><br></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Pincode</span>
                        <input type="text" name="pincode" placeholder="Enter your pincode"required> 
                        <span style='color:red;font-size:small;'><?php if(isset($pincode))echo $pincodeerror?><br></span>

                    </div>
                    <div class="gender-det">
                        <span class="category">Previous Experience</span>
                        <input type="radio" value="yes" name="exp" required>
                        <label for="yes">Yes</label><br>
                        <input type="radio" value="no" name="exp" >     
                      <label for="no">No</label><br>
                        <span style='color:red;font-size:small;'><?php if(isset($exp))echo $experror ?><br></span> 
                   </div>
                    <div class="gender-det">
                        <span class="gender-title">Gender</span><br><br>
                        <div class="category">
                        <input type="radio" id="female"value="female" name="gender" required>
                        <label for="female">Female</label><br>
                        <input type="radio" id="male" value="male"name="gender" >
                        <label for="male">Male</label><br>
                        <input type="radio" value="others" name="gender">
                        <label for="others">Others</label><br>
                        <span style='color:red;font-size:small;'><?php if(isset($gender))echo $gendererror ?><br></span>
                    </div>
                        
                    </div>
                    <br>
                  <div class="buttonsub">
                  <button type="submit" name="submit" >SUBMIT NOW</button>  
                  </div> 
                    
     



                    </div>

                  </div>   
                </div>
            </form>
        </div>
</div>
</body>
</html>