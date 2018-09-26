<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('header.html');
?>

<div class="page-header"><h1>Hemosource </h1></div>


 <form action="index.php" method="post">

        <p>

            <label for="Name">enter test name:</label>

            <input type="text" name="Name" id="Name">

        </p>
        <p>

            <label for="User_id">id(enter 4 character id):</label>

            <input type="text" name="User_id" id="User_id">

        </p>
	<p>

            <label for="stNum"> enter street NUmber:</label>

            <input type="text" name="stNum" id="stNum">

        </p>



	<p>

            <label for="stAdd">street:</label>

            <input type="text" name="stAdd" id="stAdd">

        </p>

        <p>

            <label for="city">city:</label>

            <input type="text" name="city" id="city">

        </p>

        <p>

            <label for="state">state:</label>

            <input type="text" name="state" id="state">

        </p>

        <p>

            <label for="zip">zip code:</label>

            <input type="text" name="zip" id="zip">

        </p>


	    <p>

            <label for="BT">Building Type:</label>
            <select name = "BT">
                <option value="Hos">Hospital</option>
                <option value="BB">Blood Bank</option>
               
            </select>

       
        </p>
        
        <input type="submit" name= "submit" value="Submit">

    </form>
<?php
    $link = mysqli_connect("localhost", "id7099104_hemosource", "hemosource1", "id7099104_hemosource");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}


 
if (isset($_POST['submit'])) {
// Escape user inputs for security

$nm = mysqli_real_escape_string($link, $_REQUEST['Name']);

$id = mysqli_real_escape_string($link, $_REQUEST['User_id']);

$stn = mysqli_real_escape_string($link, $_REQUEST['stNum']);

$sta = mysqli_real_escape_string($link, $_REQUEST['stAdd']);

$cy = mysqli_real_escape_string($link, $_REQUEST['city']);

$st = mysqli_real_escape_string($link, $_REQUEST['state']);

$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);

$bt = mysqli_real_escape_string($link, $_REQUEST['BT']);


 

// attempt insert query execution

$sql = "INSERT INTO Banks_Hospitals VALUES ('$nm','$id', '$stn', '$sta','$cy','$st','$zip','$bt','$bt')";
if(mysqli_query($link, $sql) ){

    echo "Data stored.";

} else{

    echo "there was a problem storing your data ";

}

 
}

// close connection

mysqli_close($link);

?>
