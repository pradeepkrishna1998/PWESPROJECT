<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "welfare");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM details where complaint='road' ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Address</th> 
<th>Date</th>						 
                         <th>City</th> 

						 
						<th>Phone</th>
						<th>pincode</th>
						<th>complaint section</th>
						<th>feedback</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["address"].'</td>  
						 <td>'.$row["date"].'</td>  
                         <td>'.$row["city"].'</td>  
						<td>'.$row["mobile"].'</td>  
						<td>'.$row["pincode"].'</td>
						<td>'.$row["complaint"].'</td>  
						<td>'.$row["feedback"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=elecdownload.xls');
  echo $output;
 }
}
?>
