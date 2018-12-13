<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('header.html');
?>




 <form action="regAdmin.php" method="post">

       
     
	<p>

            <label for="stNum"> Enter a Username:</label>

            <input type="text" name="stNum" id="stNum">

        </p>



	<p>

            <label for="stAdd">Enter a Password:</label>

            <input type="password" name="stAdd" id="stAdd">

        </p>
        
        
         
      
        <input type="submit" name= "submit" value="Submit">

    </form>
<?php
   $link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}


 
if (isset($_POST['submit'])) {
// Escape user inputs for security



$stn = mysqli_real_escape_string($link, $_REQUEST['stNum']);

$sta = mysqli_real_escape_string($link, $_REQUEST['stAdd']);



$sta = hash("sha256", "$sta");
 

// attempt insert query execution

    $sql = "INSERT INTO admin_login VALUES ( '$stn', '$sta')";

if(mysqli_query($link, $sql) ){

    echo "Username successfully registered.";

} else{

    echo "Username is already in use, please enter a different one.";

}

 
}

// close connection

mysqli_close($link);

?>

