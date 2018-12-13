 <?php
$page_title = 'Look up Users';
if (!isset($_SESSION['uname']))  
{  
 include('header.php');
}else {
       include('header.html');
      }	  


?>
 <!DOCTYPE html>

    <html lang="en">
        <div class="page-header"><h1>Facilities </h1></div>

    <head>
    <style>
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
    background-color: #607199;
    color: white;
}
#black {
  background-color: #607199;
  height: 200%;
  
}

    </style>
    
    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>

    <form action="view_fac.php" method="post">
    <div id ="black">
        <p>
	    <select name = "search_by">
  		<option value="Name">Search by Name</option>
	    </select>
            <label for="valueToSearch">Enter Keyword:</label>

            <input type="text" name="valueToSearch" id="valueToSearch">

       
        <input type="submit" name = "submit" value="Search">
	
	</p>
</div>
    </form>
    
    
    <?php
$con=mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
ob_start();
$sql = "SELECT * FROM tbl_8 WHERE  Distance !=0";

$result = mysqli_query($link, $sql);

       

            echo "<table>";
            echo "<col width='130'>";
            echo "<col width='230'>";
            echo "<col width='130'>";
            echo "<col width='30'>";
            echo "<col width='30'>";
            

                echo "<tr>";

                    echo "<th>Name</th>";
                    echo "<th>Address</th>";
                    echo "<th>Phone Number</th>";
                    echo "<th>Distance</th>";
                    echo "<th>Registered</th>";


                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Phone Number'] . "</td>";
                    echo "<td>" . $row['Distance'] . "</td>";
                    echo "<td>"  . $row['Registered'] . "</td>";

                echo "</tr>";

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        
   

   
   

    // Close connection

    mysqli_close($link);
?>
   <?php
  /* Attempt MySQL server connection. Assuming you are running MySQL

  server with default setting (user 'root' with no password) */

  $link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");


     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     
   if (isset($_POST['submit'])) { 
    // Attempt select query execution
    ob_end_clean();

    $opt_value =$_POST['search_by'];
    
    $valueToSearch = $_POST['valueToSearch'];
    $sql = "SELECT * FROM tbl_8 WHERE ".$opt_value." LIKE '%".$valueToSearch."%'and Distance !=0";

if($result = mysqli_query($link, $sql)){

       

            echo "<table>";
            echo "<col width='130'>";
            echo "<col width='230'>";
            echo "<col width='130'>";
            echo "<col width='30'>";
            echo "<col width='30'>";
            

                echo "<tr>";

                    echo "<th>Name</th>";
                    echo "<th>Address</th>";
                    echo "<th>Phone Number</th>";
                    echo "<th>Distance</th>";
                    echo "<th>Registered</th>";


                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Phone Number'] . "</td>";
                    echo "<td>" . $row['Distance'] . "</td>";
                    echo "<td>"  . $row['Registered'] . "</td>";

                echo "</tr>";

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        } else{

            echo "No records matching your query were found.";

        }
   }

   
   

    // Close connection

    mysqli_close($link);

    ?>
    </body>

    </html>
