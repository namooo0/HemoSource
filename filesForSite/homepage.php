<?php
// Initialize the session
include('session.php');

 include('header.php');


// Check if the user is logged in, if not then redirect him to login page

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;
        
          
    /* The image used */
   /* background-image: url("set-of-donation-bags-with-different-blood-types-vector-image-noticeable-bag-clipart.jpg");

    background-attachment: fixed;
    background-repeat: no-repeat;
    */
        }

    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
th {
    background-color: #afeeee;
    color: white;
}

#black {
  background-color: #afeeee;
  height: 200%;
  
}


    

    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hello <?php echo $login_session; ?>.</h1>
    </div>
    
     <p style = "font-family:georgia,garamond,serif;font-size:30px;font-style:bold;">
        This is the home page for our site (It is a work in progress).
        
    </p>
    
 
                

</body>
</html>
