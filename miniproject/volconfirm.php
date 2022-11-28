<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sitting_billing_style.css">
</head>

<body>
    <div class="cont">
    <button class="but"type="button"onclick='openPopup()'>SUBMIT</button>
    
     <div class="popup" id="popup">
            <img src="tick.png">
            <h2>Thank You .</h2>
            <p>Your booking details have been submitted.</br>
            Total Price:</p> 
            <button type="button" onclick="closePopup()">OK</button>

        </div>
     </button>
    </div>
    <script>
        let popup = document.getElementById("popup");
        let p=document.getElementById("body");
        function openPopup(){
        popup.classList.add("open-popup");
        p.classList.add("close");  
        }
        function closePopup(){
        popup.classList.remove("open-popup");
        }
       
        </script>
    
    
</body>

</html>