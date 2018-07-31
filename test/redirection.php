<?php
      $total = $_POST['total'];
	  $cids = $_POST['cids'];
	  
     $connect= mysqli_connect("localhost","root","novalnet","new"); // database connections
     $updatetotal = "UPDATE `candidate_details` SET `result`= '$total' WHERE `cid` = '$cids' ";
     
	$result = mysqli_query($connect,$updatetotal);
	
	if(empty( $result)){echo "empty";}else {echo "full";}
	
	header('location:candidatedetail.php');
	
	
	?>
