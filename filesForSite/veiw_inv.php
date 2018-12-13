<?php
$page_title = 'Inventory Look Up';
if (!isset($_SESSION['uname']))  
{  
 include('header.php');
}else {
       include('header.html');
      }	  

?>



 <!DOCTYPE html>

    <html lang="en">
        <div class="page-header"><h1>Inventories </h1></div>

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
    color: black;
}

#black {
  background-color: #607199;
  height: 200%;
  
}


    </style>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body onload="document.forms['form1'].submit()">
        
    

    <form action="veiw_inv.php" method="post" name="form1">
        <div id ="black">
 <p>

	    <select name = "search_by">
  		<option value="Blood">Search Blood</option>
  		<option value="Platelets">Search Platelets</option>
  		<option value="Plasma">Search Plasma</option>
	    </select>
            <label for="valueToSearch">Enter Keyword:</label>

            <input type="text" name="valueToSearch" id="valueToSearch">

       
        <input id = "submit" type="submit" name = "submit" value="Search">
	
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
$sql = "SELECT * FROM Blood_Inventory ";

$result = mysqli_query($link, $sql);

       

            echo "<table>";

                echo "<tr>";

                    echo "<th>Name</th>";

                    echo "<th>O+</th>";

                    echo "<th>O-</th>";

		             echo "<th>A+</th>";

                    echo "<th>A-</th>";
                    
                     echo "<th>B+</th>";

                    echo "<th>B-</th>";
                    
                    echo "<th>AB+</th>";

                    echo "<th>AB-</th>";

                echo "</tr>";
            

                

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['Name'] . "</td>";

                    echo "<td>" . $row['Opos'] . "</td>";

                    echo "<td>" . $row['Oneg'] . "</td>";
                    
                     echo "<td>" . $row['Apos'] . "</td>";

                    echo "<td>" . $row['Aneg'] . "</td>";
                    
                     echo "<td>" . $row['Bpos'] . "</td>";

                    echo "<td>" . $row['Bneg'] . "</td>";
                    
                     echo "<td>" . $row['ABpos'] . "</td>";

                    echo "<td>" . $row['ABneg'] . "</td>";

                echo "</tr>";

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        
   

   
   

    // Close connection

    mysqli_close($link);
?>
 
    
    
    <?php
    $link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");
     // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        
    }
    
   if (isset ($_POST['submit']) and $_POST['search_by'] == "Blood" ) { 
    // Attempt select query execution
    //isset($_POST['submit'])
    ob_end_clean();
    $opt_value =$_POST['search_by'];
    
    $valueToSearch = $_POST['valueToSearch'];
    $sql = "SELECT * FROM Blood_Inventory where Name LIKE '%".$valueToSearch."%'Order by name ASC";
    if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){

            echo "<table>";

                echo "<tr>";

                    echo "<th>Name</th>";

                    echo "<th>O+</th>";

                    echo "<th>O-</th>";

		             echo "<th>A+</th>";

                    echo "<th>A-</th>";
                    
                     echo "<th>B+</th>";

                    echo "<th>B-</th>";
                    
                    echo "<th>AB+</th>";

                    echo "<th>AB-</th>";

                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                  echo "<td>" . $row['Name'] . "</td>";

                    echo "<td>" . $row['Opos'] . "</td>";

                    echo "<td>" . $row['Oneg'] . "</td>";
                    
                     echo "<td>" . $row['Apos'] . "</td>";

                    echo "<td>" . $row['Aneg'] . "</td>";
                    
                     echo "<td>" . $row['Bpos'] . "</td>";

                    echo "<td>" . $row['Bneg'] . "</td>";
                    
                     echo "<td>" . $row['ABpos'] . "</td>";

                    echo "<td>" . $row['ABneg'] . "</td>";
                echo "</tr>";

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        } else{

            echo "No records matching your query were found.";

        }
    

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

   }  

   
    

    // Close connection

    mysqli_close($link);

    ?>
    <?php
    $link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");
     // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        
    }
    if (isset ($_POST['submit']) and $_POST['search_by'] == "Plasma" ) { 
    // Attempt select query execution
    //isset($_POST['submit'])
    ob_end_clean();
    $opt_value =$_POST['search_by'];
    
    $valueToSearch = $_POST['valueToSearch'];
    $sql = "SELECT * FROM Blood_Plasma where Name LIKE '%".$valueToSearch."%'Order by name ASC";
    if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){

            echo "<table>";

                echo "<tr>";

                    echo "<th>Name</th>";

                    echo "<th>O+</th>";

                    echo "<th>O-</th>";

		             echo "<th>A+</th>";

                    echo "<th>A-</th>";
                    
                     echo "<th>B+</th>";

                    echo "<th>B-</th>";
                    
                    echo "<th>AB+</th>";

                    echo "<th>AB-</th>";

                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                      echo "<td>" . $row['Name'] . "</td>";

                    echo "<td>" . $row['Opos'] . "</td>";

                    echo "<td>" . $row['Oneg'] . "</td>";
                    
                     echo "<td>" . $row['Apos'] . "</td>";

                    echo "<td>" . $row['Aneg'] . "</td>";
                    
                     echo "<td>" . $row['Bpos'] . "</td>";

                    echo "<td>" . $row['Bneg'] . "</td>";
                    
                     echo "<td>" . $row['ABpos'] . "</td>";

                    echo "<td>" . $row['ABneg'] . "</td>";

                echo "</tr>";

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        } else{

            echo "No records matching your query were found.";

        }
    

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

   }  
    ?>
    
    
    <?php
    $link = mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");
     // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());
        
    }
    if (isset ($_POST['submit']) and $_POST['search_by'] == "Platelets" ) { 
    // Attempt select query execution
    //isset($_POST['submit'])
    ob_end_clean();
    $opt_value =$_POST['search_by'];
    
    $valueToSearch = $_POST['valueToSearch'];
    $sql = "SELECT * FROM Blood_Platelets where Name LIKE '%".$valueToSearch."%'Order by name ASC";
    if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){

            echo "<table>";

                echo "<tr>";

                    echo "<th>Name</th>";

                    echo "<th>O+</th>";

                    echo "<th>O-</th>";

		             echo "<th>A+</th>";

                    echo "<th>A-</th>";
                    
                     echo "<th>B+</th>";

                    echo "<th>B-</th>";
                    
                    echo "<th>AB+</th>";

                    echo "<th>AB-</th>";

                echo "</tr>";

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                 echo "<td>" . $row['Name'] . "</td>";

                    echo "<td>" . $row['Opos'] . "</td>";

                    echo "<td>" . $row['Oneg'] . "</td>";
                    
                     echo "<td>" . $row['Apos'] . "</td>";

                    echo "<td>" . $row['Aneg'] . "</td>";
                    
                     echo "<td>" . $row['Bpos'] . "</td>";

                    echo "<td>" . $row['Bneg'] . "</td>";
                    
                     echo "<td>" . $row['ABpos'] . "</td>";

                    echo "<td>" . $row['ABneg'] . "</td>";
                echo "</tr>";

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        } else{

            echo "No records matching your query were found.";

        }
    

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

   }  
    ?>
    </body>

    </html>



