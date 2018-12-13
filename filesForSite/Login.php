<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
// Check if the user is already logged in, if yes then redirect him to welcome page

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Include config file
$link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");

 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: wel.php");
    exit;
}

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']);
      $mypassword = hash( "sha256", "$mypassword");
      $sql = "SELECT * FROM Login_Info WHERE Username = '$myusername' and Pass = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	  
   $count = mysqli_num_rows($result);
   if($count == 1) {
         $_SESSION["username"] = $myusername;
         
         header("location: wel.php");
      }else {
        echo "Your Username or Password is invalid";
      }	
     
   }
   ?>

<html>

   <head><?php
       include('header.html');
?>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>

