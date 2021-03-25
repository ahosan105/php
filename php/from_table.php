<?php

 $conn = mysqli_connect('localhost','root','','from');
 
?>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" ">
    <meta name="keyword" content=" ">
    <meta name="author" content="">	

    <title> CRUD Management System </title>
	
  <!-- Custom styles-->
  <link href="css/style.css" rel="stylesheet">	
</head>
<body>

<header class="head">
    <nav class="nav"> 
	   <a href="index.php" class="logo">CRUD</a>
	   <div class="menu">
	      <ul>
		    <li><a href="index.php">Number List</a></li>
	      </ul>
	   </div>
    </nav> 
</header> 

<div class="container">

   <div class="content-head">
      <h2>Contact Number List</h2>
   </div>
   
   <div class="table-box"> 
   <a href="add.php">Add</a>
   
   <div style="width:50%; margin:auto;">

   
   </div>
    

   
   
	   <table class="table" border="1">
	   		 </tr>
          <?php
	    
	$sql = "select * from registration";
	
		  $result = mysqli_query($conn,$sql);
		   while($row = mysqli_fetch_assoc($result)){ ?>
		   
		         <tr>
					  <th width="15%">ID</th>
					  <th width="15%">Name</th>
                      <th width="15%">Phone Number</th>
					  <th width="10%">email</th>
					  <th width="15%">Person Status</th>
					  <th width="12%">City</th>
					  <th width="30%" colspan="2">ACtion</th>
		
		   
		   
		<tr align="center">
					  <td width="15%"><?php echo $row['ID'];?></td>
					  <td width="15%"><?php echo $row['NAME'];?></td>
					  <td width="13%"><?php echo $row['PHONE'];?></td>
					  <td width="15%"><?php echo $row['EMAIL'];?></td>
					  <td width="12%"><?php echo $row['STATUS'];?></td>
					  <td width="12%"><?php echo $row['CITY'];?></td>

					   <td width="10%" class="edit">  
					     <a href="edit.php?editid=">Edit</a>
					   </td>
						 
					  <td width="30%" class="delete">
					     <a href="">
						Delete
						 </a>
				      </td>
				 </tr>
		 
  

			    
<?php } ?>


		   
	   </table>
   </div>
   
</div>


<footer class="footer">
   <p>CopyRight by NACTAR- 2019</p>
</footer>

</body>
</html>
