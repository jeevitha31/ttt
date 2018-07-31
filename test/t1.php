<html>
<style>
body {
max-width: 1200px; margin: 0 auto }

div.left {
width: 30%;
float: left}

div.content {
width: 45%;
text-align:center;
float: left}

div.right {
width: 20%;
float: left}

</style>	

<script>
function textbox(a)
{
//alert('checkbox is clicked');
//alert(a);
 var d = document.getElementById(a);
    d.innerHTML = "<input type='text' size='1' id=''>";

	
}

</script>

	
<body>
	<h3 align="center">Question Deatail</h3>
<div class="left">
<p><b>Use Login deatail</b></p>
<br>
<br>
<br>
<br>
<br>
<div style="margin:0 auto;width:95%;text-align:left">
	<b>User name</b>
	<input type="text">
	<br>
	<b>Password</b>
	<br>
	<input type="text">
	</div>
</div>
<div class="content">
<p><b>Question Catagires</b></p>
<table align="center">
<?php

  
$con=mysqli_connect('localhost','root','novalnet','log');


$query="select * from catagiries";
$res=mysqli_query($con,$query);
$catagry=array();	
while($row=mysqli_fetch_assoc($res))
{
$catagry[]=$row;

}	
foreach($catagry as $select)
{
	
foreach($select as $cat2)
{	
?>
<tr><td><input type="Checkbox" value="<?php  echo $cat2 ;  ?>" onclick="textbox('<?php  echo $cat2 ;?>');"></td><td><?php echo $cat2; ?></td><td><span id="<?php echo $cat2;  ?>"></span></td></tr>
<br>
<?php	
}
}




?>
</table>
</div>
<div class="right">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<input type="submit" value="Create Question paper">

</div>
</body>
</html>

<?php

  
  
$con=mysqli_connect('localhost','root','novalnet','log');

if(isset($_POST['add_catagiries']))
{
$query="select * from catagiries";
$res=mysqli_query($con,$query);
$a=array();		
while($row=mysqli_fetch_assoc($res))
{
$a[]=$row;

}	
//print_r($a);
}



?>
