<?php # Script 3.4 - index.php

ini_set('display_errors',1);
error_reporting(E_ALL);
// Check if the user is already logged in, if yes then redirect him to welcome page

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Include config file
$link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 



   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($link,$_POST['psw']); 
      $hashpas = hash("sha256",$mypassword);
      $sql = "SELECT Username FROM Login_Info WHERE Username = '$myusername' and Pass = '$hashpas'";
      $sql2 = "SELECT Username FROM admin_login WHERE Username = '$myusername' and Pass = '$hashpas'";
      $result = mysqli_query($link,$sql);
      $result2 = mysqli_query($link,$sql2);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      
      
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
   $count = mysqli_num_rows($result);
   $count2 = mysqli_num_rows($result2);
   if($count == 1) {
         //session_register("myusername");
         $_SESSION["uname"] = $myusername;
         
         header("location: wel.php");
      }else if($count2 == 1) {
         //session_register("myusername");
         $_SESSION["uname"] = $myusername;
         
         header("location: wel.php");
      }
      else {
        echo "Your Username or Password is invalid";
      }	
     
   }
if (isset($_SESSION['uname']))  
{  
header("Location:veiw_inv.php");  
} 
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">

 <form action="index.php" method="post">
     <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        /* Full-width input fields */
        
input[type=text], input[type=password] {
    width: auto;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: auto; /* Full width */
    height: auto; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: auto; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 30px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
    </style>
    <div style="width:800px; margin:0 auto;">
        <h1> Welcome To</h1>
        
    </div>
    <img src="https://raw.githubusercontent.com/namooo0/HemoSource/master/HemoSource.png?token=AaWUxMxtrGU1Nl8yVo-ph2BBW1-XU6Yxks5b2MRGwA%3D%3D" width="300" height="60" alt="">

      <body>
   
    <p>
        <a href="register.php"  class="btn btn-warning">Register</a>
        <a onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger">Login</a>
        
   </p>
   <div id="id01" class="modal" >
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container"  style="background-color:#f1f1f1; width:300;">
        <img src="https://raw.githubusercontent.com/namooo0/HemoSource/master/HemoSource.png?token=AaWUxMxtrGU1Nl8yVo-ph2BBW1-XU6Yxks5b2MRGwA%3D%3D" width="250" height="60" alt="">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1; width:300;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    

</body>
    </form>
</html>
