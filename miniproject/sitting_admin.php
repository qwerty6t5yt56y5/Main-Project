 <?php
include("connect.php");
include 'admin-header.php';
$sql="select * from pet_sitting";
$res=mysqli_query($conn,$sql);

?>
<html>
    <head>
    <link rel="stylesheet" href="admin.css">
       
       
</head>
<style>
    aside{
        width:170px;
    }
    </style>

<aside>
        <div class="dashboard">
           
        <a href="admin-dash.php" >Dashboard</a>
            <div class="userimg"> 
           
            
            <a href="income.php" > <img style="float:left" src="don.png"><span>Income </span></a>
            </div>
            <div class="userimg"> 
            
             <a class="subbtn" href="admin_volunteer.php"><img  style="float:left" src="vol.png"><span>Recruitment</span></a>
            </div>
            <div class="userimg"> 
          
            
            <a href="admin_pet.php">  <img   style="float:left"src="ado.png"><span>Pet Adoption</span></a>
            </div>
            <div class="userimg"> 
         
            
            <a href="sitting_admin.php" style=" background:rgb(143, 139, 139);
    color:black;";>   <img  style="float:left" src="sit.png"><span>Pet Sitting</span></a>
            </div>  

            
        </div>

    </aside>
    <body >
   <div class="sitting">
<h1 > PET-SITTING DETAILS<br><br></h1>

<div class="tablesitting">
     
<table border=3 >

<tr>

<th >ID</th>
<th> NAME </th>
<th>NUMBER</th>

<th>PET_NAME</th>
<th>PET</th>
<th>BREED</th>
<th>SEX</th>
<th>DIET</th>
<th>PAYMENT</th>
<th>APPROVE/REJECT</th>
<th>STATUS</th>

</tr>

 

<?php

while($row=mysqli_fetch_assoc($res))

{ 
    echo
    "
    <tr><td>  " . $row["sitting_id"]."</td>".
    "<td> " . $row["name"]."</td>".
    " <td>" .$row["number"]."</td>".
   
    "<td> " . $row["pet_name"]."</td>". 
    "<td> " . $row["pets"]."</td>". 
    "<td> " . $row["breed"]."</td>". 
    "<td> " . $row["sex"]."</td>".
 "<td> " . $row["diet"]."</td>". 
    "<td> " . $row["payment"]."</td>".
    

   "<td>"."<a href='sitting_admin.php?id=". $row["sitting_id"]." 'class='btn'>Approve Booking </a>".
   "<td> " . $row["status"]."</td></tr>" ;
  

if(isset($_GET['id']))
{// echo"<script>confirm('Do you want to delete the volunteer details permanently?')</script>";
    $id=$_GET['id'];
    $del=mysqli_query($conn,"update  pet_sitting  set status='BOOKED' where sitting_id='$id'");
    
}

   
   



}


echo"</table";

    
?>
</div></div>

</body>
    </html>