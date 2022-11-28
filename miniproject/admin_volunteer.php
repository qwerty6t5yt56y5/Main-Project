
<?php
include("connect.php");
$sql="select * from volunteer_tbl inner join sign_up where sign_up.userid=volunteer_tbl.userid";
$res=mysqli_query($conn,$sql);
if(isset($_GET['id']))
{// echo"<script>confirm('Do you want to delete the volunteer details permanently?')</script>";
    $id=$_GET['id'];
    $del=mysqli_query($conn,"delete from volunteer_tbl where voID='$id'");
}
?>
<html> 
    <head>
        <link rel="stylesheet" href="admin.css">
       
</head>

<body >
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
           
            
            <a href="income.php" > <img style="float:left" src="don.png"><span>Income </span></a>
            </div>
            <div class="userimg"> 
            
             <a class="subbtn" href="admin_volunteer.php" style=" background:rgb(143, 139, 139);
    color:black;";><img  style="float:left" src="vol.png"><span>Recruitment</span></a>
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


    <br><br>
<h1 > <span class="volHead">VOLUNTEER DETAILS<br></span></h1>


     <div class="tablevolunteer">

   
<table  border="2" cellpadding="0">
<tr>

<th>volunteer id</th>
<th>Volunteer Name</th>
<th> DOB </th>
<th>Time to contact</th>
<th>Address</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Pincode</th>
<th>Experience</th>
<th>Gender</th>
<th>Operation</th>
</tr>

 

<?php

while($row=mysqli_fetch_assoc($res))

{ 
    echo
    "
    <tr><td>  " . $row["voID"]."</td>".
    
    "<td> " . $row["Name"]."</td>".
    "<td> " . $row["dob"]."</td>".
    " <td>" .$row["time_contact"]."</td>".
    "<td> " . $row["address"]."</td>".
    "<td> " . $row["state"]."</td>". 
    "<td> " . $row["district"]."</td>". 
    "<td> " . $row["city"]."</td>". 
    "<td> " . $row["pincode"]."</td>". 
    "<td> " . $row["experience"]."</td>". 
    "<td> " . $row["gender"]."</td>".

    "<td>"."<a href='admin_volunteer.php?id=". $row["voID"]." 'class='btn'>DELETE </a></tr>" ;
   
   



}


echo"</table";
    
?>
</div>
</main>
</body>
    </html>
