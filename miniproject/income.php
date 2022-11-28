<?php
session_start();
include 'connect.php';
$sql="select sum(Amount)as sum from donation";
$res=mysqli_query($conn,$sql);
$donamount=mysqli_fetch_array($res);

$sql1="SELECT sum(total) as sittingsum FROM sitting_bills";
$res1=mysqli_query($conn,$sql1);
$sitamount=mysqli_fetch_array($res1);


?>
<html>
    <head>
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
<style>
  aside{
    margin-top:-25px;
  }
  </style>
    <aside>
        <div class="dashboard">
           
        <a href="admin-dash.php" >Dashboard</a>
            <div class="userimg"> 
           
            
            <a href="income.php" style=" background:rgb(143, 139, 139);
    color:black;";> <img style="float:left" src="don.png"><span>Income </span></a>
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
        
        <style>header{
margin-top:-100px;

        }</style>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<div class="char"style="margin-top:100px;">
<canvas id="myChart" style="width:100%;max-width:800px"></canvas>

<script>
  var x='<?php echo$donamount['sum'];?>';
var xValues = ["DONATION INCOME", "PET SITTING INCOME"];
var yValues = ['<?php echo$donamount['sum'];?>', '<?php echo$sitamount['sittingsum'];?>'];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>
</div>
</body>
    </html>