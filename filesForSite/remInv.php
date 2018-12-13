<?php
$page_title = 'Inventory Look Up';
if (!isset($_SESSION['uname']))  
{  
 include('header.php');
}else {
       include('header.html');
      }	  

?>






 <form action="remInv.php" method="post">

       
     
	<p>

            <label for="stNum"> Bag ID:</label>

            <input type="text" name="stNum" id="stNum">

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

//$sta = mysqli_real_escape_string($link, $_REQUEST['BT']);



 

// attempt insert query execution

    $sql = "DELETE FROM tbl_9 where ID = '$stn'";
    $sql2 = "update Blood_Inventory set Opos = Opos - 1 where Name = 'Albany Medical Center Hospital'";
    

if(mysqli_query($link, $sql) and mysqli_query($link, $sql2) ){

    echo "Finished.";

} else{

    echo "Error adding Blood";

}

 
}

// close connection

mysqli_close($link);

?>

