<!DOCTYPE html>
<html>
<head>
<h1><marquee direction="right"> ELECTRICITY DATABASE PORTAL</marquee></h1>
 <title>Table with database</title>
 <style>
  table {

   width: 100%;
   color: #588c7e;
   font-family: cursive;
   font-size: 25px;
   text-align: center;
   
     } 
	 body{
	 background-size:cover;}
  th {
   background-color: lightyellow;
   color: brown;
    }
	td {
   background-color: lightblue;
   color: brown;
    }
   h1{
  color:honeydew;}
 </style>
</head>
<body background="Capture.png">
 <table border="1">
 <tr>
  <th>Id</th> <br>
  <th>Username</th> 
  <th>Address</th>
  <th>City</th>
  <th>Mobile</th>
  <th>Pincode</th>
  <th>Complaint</th>
  <th>Feedback</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "welfare");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = " SELECT * FROM details where complaint= 'electricity' ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr>
	<td>" . $row["id"]. "</td>
	<td>" . $row["name"] . "</td>
	<td>". $row["address"]. "</td>
	<td>" . $row["city"]. "</td>
	<td>" . $row["mobile"] . "</td>
	<td>". $row["pincode"]. "</td>
	<td>". $row["complaint"]. "</td>
	<td>". $row["feedback"]. "</td>
	
	
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>



