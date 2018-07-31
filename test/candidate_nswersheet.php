<html>
  <head>
	   <script>
                 function fnew()
              {
                     var check = document.querySelectorAll('input[type="checkbox"]:checked').length;
                     document.getElementById("total").value = check;
                     document.getElementById("view").innerHTML = check;
              }
       </script>
       <style>
       
		   
	
    
		   #main {
    
    width: 1324px;
    height: 577px;
   padding-left:20px;
}
		   
		           
		   
       
       </style>
  </head>
   <body onload="fnew()"><div id = "main">
	 <form action = "redirection.php" method = "POST">
		
	        
	<?php
	        	
	        	 $connect= mysqli_connect("localhost","root","novalnet","new");
                 $cid = $_POST['cid'];
                 $cname = $_POST['cname'];
                   
		         $b = "SELECT * FROM `candidate_details` WHERE `cname` = '$cname' ";
		         $res = mysqli_query($connect,$b);
		         
		         $a = "SELECT * FROM `ans_info` WHERE `cid`= '$cid'  " ;
                 $result = mysqli_query($connect,$a);
          	
                
	        	while($raw = mysqli_fetch_assoc($res)){
					 echo "<br> Candidate ID   :   ";
	                 echo $cid = $raw['cid'];
	                 echo "<br> Candidate Name   :   ";
	        	     echo $cname = $raw['cname'];
	        	   
	        	}
	        	while($row = mysqli_fetch_assoc($result)){
	        		 $lang = $row['language'];
	        		echo "<br><table><tr><td><h3>".$lang."</h3></td></tr>";
	        	    echo "<tr><td> * ".$row['Question']."</td></tr>"; 
	        	    echo "<tr><td>".$row['Answer']."</td>";
	        	     
	        	    
	        if($row['Answer'] == !empty($row['Correct']))
	        {
	        				
	        	if($row['Answer'] == $row['Correct'] )
	        	{	        	     				  
	        	   echo "<td><input type = 'checkbox' checked disabled></td>";
	            }
	               else
	               {
	        		 echo " <td><input type = 'checkbox' disabled></td>";
	        	   }
	        }
	        	   else
	        	   {	        		   
	        		  echo "<td><input type = 'checkbox' onclick='return fnew()'></td>";	        		
	        		}
	           }
	 ?>	 
	        </tr></table>   
	        <input type = "hidden" name = "cids" value = "<?php echo $cid ?>">
	        <input type = "hidden" id = "total" name = "total"><br><br>
	        <input type = "submit" value = "submit" >
	           <h2>Correct Answer : <span  id = "view" name = "view"></span></h2	>        
	         
	 </form>
	 </div>
   </body>
</html>
