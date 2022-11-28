<?php
session_start();
include 'connect.php';
$countpets="select count(*) from pet_sitting";
$petcount=mysqli_query($conn,$countpets);
$petc=mysqli_fetch_array($petcount);

$countvol="select count(*) from volunteer_tbl";
$volcount=mysqli_query($conn,$countvol);
$volc=mysqli_fetch_array($volcount);

$countadop="select count(*) from pet_details where status='adopted'";
$adopcount=mysqli_query($conn,$countadop);
$adopc=mysqli_fetch_array($adopcount);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="admin_dash.css">  
</head>
<body>
<header>

<div class="head"> 
        <div class="imgclass">
            <img src="logo.jpg" style="float: left">
            <span class="heading" style="float: left;">PaweSome</span>
        </div>
        <div class="logo-profile">
          <div class="userimg"> 
            <img src="admin.png">
             <a href="#">ADMIN</a>
            </div>
 
</div>
</header>
    <aside>
        <div class="dashboard">
           
                <a href="admin-dash.php" >Dashboard</a>
           
            <div class="userimg"> 
           
            
            <a href="income.php"> <img style="float:left" src="don.png"><span>Income </span></a>
            </div>
            <div class="userimg"> 
            
             <a class="subbtn" href="admin_volunteer.php"><img  style="float:left" src="vol.png"><span>Recruitment</span></a>
            </div>
            <div class="userimg"> 
          
            
            <a href="admin_pet.php">  <img   style="float:left"src="ado.png"><span>Pet Adoption</span></a>
            </div>
            <div class="userimg"> 
         
            
            <a href="sitting_admin.php">   <img  style="float:left" src="sit.png"><span>Pet Sitting</span></a>
            </div>  

            
        </div>

    </aside>

    <main>
        <div class="content">
            <div class="onebox red">
                <span class="count"><?php echo $petc['count(*)'];?></span><br>
                <span class="count-text">PETS RESCUED</span>
            </div>
            <div class="onebox orange">
                <span class="count"><?php echo $volc['count(*)'];?></span><br>
                <span class="count-text">VOLUNTEERS</span>
            </div>
            <div class="onebox yellow">
                <span class="count"><?php echo $petc['count(*)'];?></span><br>
                <span class="count-text">PET-SITTING</span>
            </div>
            <div class="onebox green">
                <span class="count"><?php echo $adopc['count(*)'];?></span><br>
                <span class="count-text">ADOPTED</span>
            </div>
            

        </div>

    </main>

</body>
</html>