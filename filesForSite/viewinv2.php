<?php
$page_title = 'Inventory Look Up';
if (!isset($_SESSION['uname']))  
{  
 include('header.php');
}else {
       include('header.html');
      }	  

?>
<html lang="en">
        <div class="page-header"><h1> My Inventory </h1></div>
        <p> <a href="add_inv.php">Add to Inventory</a>
            <a href="remInv.php">Remove From Inventory</a>
        </p>
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
        
    

    <form action="viewinv2.php"  >
        <div id ="black">


</div>

     </form>
<?php
$con=mysqli_connect("localhost", "u791607645_yjaq", "support123", "u791607645_yjaq");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tbl_9");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Blood Type</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['Blood Type'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>

    </html>