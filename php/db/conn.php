 <?php
    
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		         $na = $_POST['name'];
		         $p = $_POST['phone'];
		         $n = $_POST['email'];
		        $s = $_POST['person'];
		        $c = $_POST['city'];
		
		$sqlp = "insert into registration(NAME,PHONE,EMAIL,STATUS,CITY)
		value('$na','$p','$n','$s','$c')";
		
		$result = mysqli_query($conn,$sqlp);
	}
	
	
	if($result){
			echo 'Data submitted';
		}else{
			echo 'Data not submitted';
		}  
  ?>


