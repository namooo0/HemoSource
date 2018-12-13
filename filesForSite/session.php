<?php
  //ini_set('display_errors',1);
//error_reporting(E_ALL);
// Check if the user is already logged in, if yes then redirect him to welcome page

 //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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
   
   $user_check = $_SESSION['uname'];
   
   $ses_sql = mysqli_query($link,"select Username from Login_Info where Username = '$user_check' UNION select Username from admin_login where Username = '$user_check' ");
   
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   
   $login_session = $row['Username'];
   
   if(!isset($_SESSION['uname'])){
      header("location:index.php");
   }
?>

