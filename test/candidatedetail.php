<?php
	      $connect= mysqli_connect("localhost","root","novalnet","new");
		  $a = "SELECT * FROM `candidate_details` ";
          $result = mysqli_query($connect,$a);	
        
?>
<html>
	<head>
	<style>
table, th, td {
	 color: #F1F2F2;
    border: 3px solid #0080c9;
    border-collapse: collapse;
}
th{
	 color: #0080c9;
	}
	td {
	color:#606060;
	}
	
</style>
	</head>
	<body>
		
		<center><br><br><br><table style="width:75%">
	            <tr>
	               <th>Candidate ID</th>
	               <th>Candidate Name</th>
	               <th>Mobile Number</th>
	               <th>E-mail ID</th>
	               <th>Experience</th>
	               <th>Exam Date</th>
	               <th>  Mark  </th>	                
	               <th>Evaluation</th>
	           </tr>
	           <tr>
				   <?php
				   while($row = mysqli_fetch_assoc($result)){
					 
				   $cid = $row['cid'];
				    $cname = $row['cname'];
				   ?><form action = "candidate_nswersheet.php" method = "POST">
				   <td><input type="hidden" name = "cid" value ="<?php echo $cid ?>"><?php  echo $cid;  ?></td>
                   <td><input type="hidden" name = "cname" value = "<?php echo $cname ?>"><?php  echo $cname;  ?></td>
				   <td><?php  echo $row['mobile'];  ?></td>
				   <td><?php  echo $row['email']; ?></td>
				   <td><?php  echo $row['exp']; ?></td>
				   <td><?php  echo $row['examdate']; ?></td>
				   <td><?php  echo $row['result']; ?></td>				    
				   <td><input type = "submit" value = "Evaluation"></td></form>
	           </tr>
	<?php    }  
	
	?>
	  </table></center>
	  
	</body>
	</html>
