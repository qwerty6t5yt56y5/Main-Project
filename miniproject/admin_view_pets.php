
<?php 
include("connect.php");
include 'admin-header.php';
?>
<html>
    <head>
        <link rel="stylesheet"
        href="adoption.css">
</head>
<body>
    
    

    <?php

$sql="select * from pet_details  JOIN sign_up on pet_details.userid=sign_up.userid";
$res=mysqli_query($conn,$sql);
 echo'<h1>PETS ADOPTED FROM PAWESOME
 </h1>';
while($row=mysqli_fetch_assoc($res))
{
    $petid=$row["petID"];
    $type_pet=$row["type_of_pet"];
    $status=$row["status"];
    $image=$row["images"];
    $place=$row["place_of_adoption"];
    $username=$row['Name'];

   echo '
   <div class="content" >
   <div class="onebox-ado ">
       <div class="twobox-ado">
            <img class="petPic" src="'.$image.'">
      </div>
   
       <div class="textpic-ado">
           <p>Name:'.$type_pet.'</p>
           <p>Status:'.$status.'</p>
            <p>place of rescue:'.$place.'</p>';
       
       if($status=='adopted')
       {

      echo' <p>Adopted By:'.$username.'</p>
      </div>
           </div></div>' ;
       }        
           
 





}
?>
</body>
    </html>
