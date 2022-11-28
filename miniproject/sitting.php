<?php
session_start();
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet-sitting</title>
    <link rel="stylesheet" href="pet-sitting.css">
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Lobster">
</head>
<body>
   
    <?php include('header.php')?>;
   
    <div class="sub2">
    <img src="./img/sittingbg-removebg.png">
    <div class="text">
    <span >"The Best Home Pet Sitting Services in our City!! From few hours of Sitting to Days!! 
                  Our Sitters are there for your pets!!"  <br><br>
        
                  Discover Affordable Home Pet Sitting services for your furry 
                  friend with a caring pet sitter in your neighborhood!</span>
                  <br><br> 
                  <input type="button"  onclick="location.href='sitting_form.php?userid=<?php echo $userid?>';" value="Click For Registration" >  
          </div>


        </div>

  









    
    <section id="petting">
        <h2>Parents Away? We'll stay and play!</h2>
        <pre>  Are you stuck at work? Dinner plans? Catch a movie? We got your back! Get frequent updates, pictures and videos of your pet 
     being pampered by their new friend! PawSome connects you with your perfect professional dog sitter  or cat sitter, 
                                            whenever and wherever you need</pre>
                                            <h3>How Does Home Pet Sitting Work!</h3>
    <div class="sit-subdiv">
    <img src="./img/flowchart.jpg" alt=""  >
    </div>
   
</section>
<section id="pricing">
    <h2>Pricing Details !</h2>
<div class="cards">
<div class="cards-single">
  <div>
    <h1>6 $</h1>
    <span>1-Day</span>
  </div>
  <div>
    <span class="las la-users"></span>
  </div>
</div>
<div>
<div class="cards-single">
  <div>
    
    <h1>12 $</h1>
    <span>2-Day</span>
  </div>

  <div>
    <span class="las la-users"></span>
  </div>
</div>
</div>

<div >
<div class="cards-single">
  <div>
    <h1>18 $ </h1>
    <span>3-Day</span>
  </div>
  <div>
    <span class="las la-clipboard-list"></span>
  </div>
</div>
</div>

<div class="cards-single">
  <div>
    <h1>24 $</h1>
    <span>4-Day</span>
  </div>
  <div>
    <span class="lab la-google-wallet"></span>
  </div>
</div>
<div class="cards-single">
  <div>
    <h1>30 $</h1>
    <span>5-Day</span>
  </div>
  <div>
    <span class="lab la-google-wallet"></span>
  </div>
</div>
</section>
<section id="custimgs">
    <table>
        <tr>
            <td><img src="img/happy1.jpg"></td>
            <td><img src="img/happy2.jpg"></td>
            <td><img src="img/happy3.jpg"></td>
            

</tr>
<tr>
<td class="pictwo">
    <img src="img/happy4.jpg"></td>
            <td class="pictwo">
                <img src="img/happy5.jpg"></td>
                <td class="pictwo">
                <img src="img/pet-sitting.jpg"></td>
</tr>
</table>
<h2 class="capsi">Meet Our Happy Customers</h2>
<pre>We Understand how difficult and anxious it is for you as pet parents to leave your pets. Don’t worry, we have got you covered. 
    PawSome provides a safe and secure environment for your pets while you are travelling or busy at work. 
    Meet some of our customers and their cute little babies.</pre>
</section>
</body>
</html>