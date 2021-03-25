

<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" ">
    <meta name="keyword" content=" ">
    <meta name="author" content="">	

    <title>  from managementS System </title>
	
  <!-- Custom styles-->
  <link href="css/style.css" rel="stylesheet">	
</head>
<body>

<header class="head">
    <nav class="nav"> 
	   <a href="index.php" class="logo">CRUD</a>
	   <div class="menu">
	      <ul>
		    <li><a href="from_table.php">Number List</a></li>
	      </ul>
	   </div>
    </nav> 
</header> 

<div class="add-container">
   <div class="add-head">
      <h2> Add Contact Number</h2>
   </div>
 <?php
        include('db/conn.php');
?>




   
   <form action="" method="POST" class="form">
   
     <div class="form-group">
	   <label>Name</label>
	   <input type="text" name="name" placeholder="Enter Name" class="form-control">
     </div>
	 
	 <div class="form-group">
	   <label>Phone</label>
	   <input type="text" name="phone" placeholder="Enter Phone" class="form-control">
     </div>
	 
	 <div class="form-group">
	   <label>Email</label>
	   <input type="text" name="email" placeholder="Enter Email" class="form-control">
     </div>
	 
	 <div class="form-group">
	   <label>Status</label>
	   <input type="text" name="person" placeholder="Enter Status" class="form-control">
     </div>
	 
	 <div class="form-group">
	   <label>City</label>
	   <input type="text" name="city" placeholder="Enter City" class="form-control">
     </div>
	 
	 <div class="form-group" style="text-align:center;">
	   <button type="submit" class="btn">Submit</button>
     </div>
	 
   </form>
   
</div>


<footer class="footer">
   <p>CopyRight by NACTAR- 2019</p>
</footer>

</body>
</html>
