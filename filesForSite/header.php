<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HemoSource</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
      	  
    <a class="navbar-brand" href="index.php">
          <img src="https://raw.githubusercontent.com/namooo0/HemoSource/master/HemoSource.png?token=AaWUxMxtrGU1Nl8yVo-ph2BBW1-XU6Yxks5b2MRGwA%3D%3D" width="150" height="30" alt="">
        </a>
    <ul class="nav navbar-nav">
     
      <li><a href="veiw_inv.php">View Inventories</a></li>
      <li><a href="viewinv2.php">View my Inventory</a></li>
	  <li><a href="view_fac.php">View Facilities</a></li>
	  <?php
	  $link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");

    // Check connection

    if($link === false){
    
    die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    $user =$login_session;
    $head_sql = mysqli_query($link, "select Username from admin_login where Username = '$user' ");
    $row = mysqli_fetch_array($head_sql,MYSQLI_ASSOC);
	  $op1 = '<li><a href="regFacility.php">Register a Facility</a></li>';
	  if ($login_session == $row['Username']){
	  echo $op1;
	  }
	  ?>
			
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="wel.php"><span class="glyphicon glyphicon-user"></span> <?php echo $login_session; ?></a></li>
     <li><a href="Logout.php"><span class="glyphicon glyphicon-login"></span> Logout</a></li>
    </ul>
     

  </div>
  
</nav>


<div class="container">
    
<!-- Script 9.1 - header.html -->
