
<?php
session_start();
include("connect.php");
$username=$_SESSION['username'];
//$userid=$_GET['userid'];
$sql="select * from pet_details";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adoption</title>
    <link rel="stylesheet"
    href="adoption.css">
    
    <style>
        header{
            top:-4px;
        }
        </style>
</head>

<body>

<?php
    include('header.php');?> 
<main>
    <h1>ADOPT YOUR NEW FRIEND FROM OUR RESCUED ANIMALS 
    </h1>
    <?php
   
while($row=mysqli_fetch_assoc($res))
{
    $petid=$row["petID"];
   
    $type_pet=$row["type_of_pet"];
    $status=$row["status"];
    $image=$row["images"];
    $adopt="<a class='a' href='adop_confirm.php?petid={$petid}'>ADOPT NOW</a>";
    $ado="<h2 class='a'>ADOPTED</h2>";
    echo 
    '<div class="container" >
    <div class="card">
        <div class="cardimage">
             <img class="petPic" src="'.$image.'">
       </div>
    
        <div class="text">
            <p>Name:'.$type_pet.'</p>
        </div>
     ';
if($status=='adopted')
{
    echo $ado
    ;
}
else{
    echo  $ado;
}

echo'</div> </div> </div> ';


}

?>
   
</main>
</body>

</html>

