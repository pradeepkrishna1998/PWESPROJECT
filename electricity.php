<?php
$connect = mysqli_connect("localhost", "root", "", "welfare");
$sql = "SELECT * FROM details where complaint='electricity' ";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>ELECTRICITY RELATED COMPLAINTS ADMIN PAGE</title>  
  <style>
  table {

   width: 100%;
  
   font-family: cursive;
   font-size: 20px;
   text-align: center;
   
     } 
	 

	

  
 </style>
 </head>  
 <body bgcolor="honeydew">  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">ELECTRICITY RELATED COMPLAINTS " ADMIN PAGE"</h2><br /> 
	
    <table class="table table-bordered" border ="1">
     <tr>  
                         <th>Name</th>  
                         <th>Address</th>
						 <th>Date</th>
                         <th>City</th>  
						 <th>mobile</th>
                         <th>pincode</th>
						 <th>complaint seection</th>
                         <th>problem</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
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
     ?>
    </table>
    <br />
    <form method="post" action="elecexport.php">
	    <p><b>TO GET THE COMPLAINT  DATA IN EXCEL YOU CAN PRESS THE EXPORT BUTTON</b></p>
     <input type="submit"class="register" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>
