<?php
$page_title = 'Facility Registration';
if (!isset($_SESSION['uname']))  
{  
 include('header.php');
}else {
       include('header.html');
      }	  

?>




 <form action="regFacility.php" method="post">

        <p>
            <label for="Name">Select Facility:</label>
            <input type="text" name="Name" list="Name"  />
            <datalist name ="Name" id="Name">
                <?php 
                $connection = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");
                $sql = mysqli_query($connection, "SELECT Name FROM tbl_8 where registered !='yes' ORDER BY name ASC;");
                while ($row = $sql->fetch_assoc()){
                echo "<option>" . $row['Name'] . "</option>";
                }
                ?>
            </datalist>
        </p>
     



	    <p>

            <label for="stAdd">Address:</label>

            <input type="text" name="stAdd" id="stAdd">

        </p>

       
	    <p>

            <label for="BT">Facility Type:</label>
            <select name = "BT">
                <option value="Hos">Hospital</option>
                <option value="BB">Blood Bank</option>
               
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

$nm = mysqli_real_escape_string($link, $_REQUEST['Name']);



$sta = mysqli_real_escape_string($link, $_REQUEST['stAdd']);


$bt = mysqli_real_escape_string($link, $_REQUEST['BT']);


 

// attempt insert query execution

    $sql ="INSERT INTO Banks_Hospitals VALUES (null,'$nm', '$sta','$bt')";
    $sql2 = "UPDATE tbl_8 SET Registered = 'yes' WHERE Name = '$nm';";

if(mysqli_query($link, $sql) and mysqli_query($link, $sql2) ){

    echo "Data stored.";

} else{

    echo "there was a problem storing your data ". mysqli_error($link);

}

 
}

// close connection

mysqli_close($link);

?>

