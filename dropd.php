<?php

$name= $_POST['name'];
$qual= $_POST['qual'];
$sex= $_POST['optradio'];
$dept= $_POST['dept'];
$lan= $_POST['lan'];
$state= $_POST['StateList'];
$dist= $_POST['DistrictList'];
$col= $_POST['CollegeList'];

$servername = "localhost";
$username = "root";
$password = "novalnet";
$dbname = "task";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO reg(Firstname,Qualification,Sex,Department,Language,State,District,College) VALUES('$name','$qual','$sex' , '$dept','$lan','$state','$dist','$col')";

if (mysqli_query($conn, $sql)) {
	
	
    
   ?><html><h1><center>Your Information Added Successfully</center></h1></html> <?php
    
 
    echo '<center><table border=1   cellpadding=20 width="400" >';
    echo '<tr><td>Name</td><td>'.$name.'</td>';
    echo '<tr><td>Qualification</td><td>'.$qual.'</td>';
    echo '<tr><td>Sex</td><td>'.$sex.'</td>';
    echo '<tr><td>Department</td><td>'.$dept.'</td>';
    echo '<tr><td>Language</td><td>'.$lan.'</td>';
    echo '<tr><td>State</td><td>'.$state.'</td>';
    echo '<tr><td>District</td><td>'.$dist.'</td>';
    echo '<tr><td>College</td><td>'.$col.'</td>';
    echo '</center></table>';
    ?><html><br/><br/><center><strong>Thank You</strong></center></html><?php
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


	
