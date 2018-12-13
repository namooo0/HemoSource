<?php
$page_title = 'Inventory Look Up';
if (!isset($_SESSION['uname']))  
{  
 include('header.php');
}else {
       include('header.html');
      }	  

?>






 <form action="add_inv.php" method="post">

       
     
	<p>

            <label for="stNum"> Bag ID:</label>

            <input type="text" name="stNum" id="stNum">

        </p>



	<p>

            <label for="BT">Blood Type:</label>
            <select name = "BT">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB+</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               
            </select>

       
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

$sta = mysqli_real_escape_string($link, $_REQUEST['BT']);



 

// attempt insert query execution

    $sql = "INSERT INTO tbl_9 VALUES ( '$stn', '$sta')";
    $sql2 = "update Blood_Inventory set Opos = Opos +1 where Name = 'Albany Medical Center Hospital'";
    

if(mysqli_query($link, $sql) and mysqli_query($link, $sql2) ){

    echo "Finished.";

} else{

    echo "Error adding Blood";

}

 
}

// close connection

mysqli_close($link);

?>

