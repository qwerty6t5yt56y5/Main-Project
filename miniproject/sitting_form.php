<?php
session_start();
include 'connect.php';
$userid=$_GET['userid'];

//echo"<script> alert('{$curuser}')</script>";
if(isset($_POST['submit'])){
$nameerror=$phnerror=$add=$petError=$petBreed=$dietError=NULL;

  $usname=$_POST['name'];
  $phn=$_POST['number'];
  $address=$_POST['address'];
  $petname=$_POST['pet_name'];
  $pet=$_POST['pets']; 
  $breed=$_POST['breed'];
  $sex=$_POST['sex'];
  $diet=$_POST['diet']; 
  $payment=$_POST['payment'];
  if($payment=="1-day"){
                    
    //echo"<script> alert('{$curuser}')</script>";
    $price="100";
}
elseif($payment=="2-day"){
    //echo"<script> alert('{$curuser}')</script>";
    $price="200";
}
elseif($payment=="3-day"){
    //echo"<script> alert('{$curuser}')</script>";
    $price="300";
}
elseif($payment=="4-day"){
    //echo"<script> alert('{$curuser}')</script>";
    $price="400";
}
elseif($payment=="5-day"){
    //echo"<script> alert('{$curuser}')</script>";
    
    $price="500";
}
else{
    echo"error";
}

if(!preg_match("/^([a-zA-Z' ]+)$/",$usname)){
  $nameerror="Name contains alphabets only";
}
if(!preg_match("/^[0-9]{10}+$/",$phn)){
  $phnerror="Number contains 10 digits only";
}

if(!preg_match("/^([a-zA-Z' ]+)$/",$petname)){
  $petError="Name contains alphabets only";
}
if(!preg_match("/^([a-zA-Z' ]+)$/",$breed)){
  $petBreed="Breed contains alphabets only";
}
if(!preg_match("/^([a-zA-Z' ]+)$/",$diet)){
  $dietError="Breed contains alphabets only";
}
if(empty($sex)){
  $gend="Please choose an option";
}
if(empty($pet)){
  $petE="Please choose an option";
}

if(!$nameerror &&! $phnerror &&! $petBreed &&! $petError &&! $dietError &&! $petE&&! $gend)
{
   
  $sql = "INSERT INTO pet_sitting(name,number,address,pet_name,pets,breed,sex,diet,payment,total,userid) value ('$usname','$phn','$address','$petname','$pet','$breed','$sex','$diet','$payment','$price','$userid')";
  $query=mysqli_query($conn,$sql);
  $last_id = mysqli_insert_id($conn);
  $_SESSION['sitid']=$last_id;

  
  
 
  
if(!$query){
   echo "not";
}
else{
  header("Location:pay.php?userid='$userid'");
}

}



  
 
  
  
}

?>
<html>
    <head>
        <link rel="stylesheet" href="form_style.css">
        <title>sitting-form</title>
</head>
<?php
include "header.php";
   ?>
<body>
    <div class="content">
        <div class="sideimg">
            <img src="img/form.jpg">
        </div>
    <h1>ENTER YOUR INFORMATIONS HERE </h1>
    <form class="sitting-form" action="#" method='POST'>
        <input type="text" placeholder="Enter Your Name"name="name" id="name"><BR><BR>
        <span style='color:red;font-size:small;'><?php if(isset($usname))echo $nameerror ?>
        <input type="text" placeholder="Enter Your Contact Number"name="number" id="number"><BR><BR>
        <span style='color:red;font-size:small;'><?php if(isset($phn))echo $phnerror ?>
      
        <textarea  name="address" placeholder="Enter Your Address" rows="4" cols="50" id="address"></textarea><br><br>
        <input type="text" placeholder="Enter Your Pet's Name"name="pet_name" id="pet_name"><BR><BR>
        <span style='color:red;font-size:small;'><?php if(isset($pet))echo $petError ?>
        <select name="pets" id="pets" required>
                <option value="" disabled selected>Select pet</option>
                <option value="dog">DOG</option>
                <option value="cat">CAT</option>
                <option value="rabbit">RABBIT</option>
                <option value="bird">BIRDS</option>
               </select>
                      <br><br>
<input type="text" placeholder="Enter Pet Breed" name="breed" id="breed"><br><br>
<span style='color:red;font-size:small;'><?php if(isset($breed))echo $petBreed ?>
<select name="sex" id="sex" required>
<option value="" disabled selected>Select sex</option>
  <option value="female">F</option>
  <option value="male">M</option>
</select><br><br>
<textarea type="text" placeholder="enter yours pet's diet details " name="diet" id="diet"></textarea><br><br>
<select name="payment" id="payment" required>
    <option value="" disabled selected>how many days </option>
  <option value="1-day">ONE-DAY</option>
  <option value="2-day">TWO-DAYS</option>
  <option value="3-day">THREE-DAYS</option>
  <option value="4-day">FOUR-DAYS</option>
  <option value="5-day">FIVE-DAYS</option>
</select><br><br>
  <input type="submit" class="subBut"name="submit" id="submit" value="proceed to billing"  >
</form>

  </div>
  
</body>
</html>
