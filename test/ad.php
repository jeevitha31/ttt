<!DOCTYPE html>
<head>
	<style>
		main
		{
			width:1345px;
			border:1px solid black;
			
		
		}
		
		#sec
		{
		
			width:1345px;
			height:55px;
			border:1px solid pink;
		}
		h3
		{
			margin-top:0px;
			margin-left:20px;
			font-size:30px;
		}
		#bt
		{
			float:right;
			margin-top:20px;
			margin-right:10px;
			
		}
		article
		{
			width:670px;
			float:left;
			height:55px;
			border:1px solid blue;
		}
		#se
		{
			width:1345px;
			height:525px;
			border:1px solid blue;
			float:left;
		}
		#art1{
			
			width:16%;
			height:525px;
			border:1px solid blue;
			float:left;
		
			
			
		}
		#art3
		{
			margin-top:40px;
			width:13%;
			height:484px;
			border:1px solid blue;
			position:absolute;
			
		
		}
		

		#art2
		{
			
			width:83.59999%;
			height:100%;
		}
	
	.dropdown 
	{
	
		position: relative;
		display: inline-block;
		width:100%;
	}

	.dropdown-content 
	{
		display: none;
		position: absolute;
		background-color: rgb(160,160,160);
		min-width: 130px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a 
	{
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		
	}

	.dropdown-content a:hover 
	{
		background-color:rgb(225,204,204);
		border:1px solid black;
	}

	.dropdown:hover .dropdown-content
	{
		display:inline-block;
	}

	.dropdown:hover .dropbtn 
	{
		background-color: rgb(102,0,204);
	}
	.dropbtn 
	{
		background-color:rgb(78,108,78);
		color: white;
		font-size: 16px;
		border: none;
		width:100%;
		height:40px;
		margin:0 auto;
	}
	#dro
	{
		position: relative;
		display: inline-block;
		width:100%;
		
	}
	.dropdown:hover
	{
		border:1px solid black;
	}
	#dro:hover
	{
		border:1px solid black;
	}
	iframe
	{
		width:100%;
		height:100%;
	}
	
	
		
	
	
	</style>
	<script>
		function ad()
		{
		var client = new XMLHttpRequest();
		client.open('POST', 'question.php');
		client.onreadystatechange = function() {
		  document.getElementById("art2").innerHTML=client.responseText;
		}
		
		client.send();
		
			
		}
		
		function add()
		{
		var client = new XMLHttpRequest();
		client.open('POST', 'candidatedetail.php');
		client.onreadystatechange = function() {
		  document.getElementById("art2").innerHTML=client.responseText;
		}
		
		client.send();
		
			
		}
	
	
	
//~ $(document).ready(function(){
    //~ $("button").click(function(){
		//~ alert("hiii");
        //~ //$("art3").load("question.php");
    //~ });
//~ });
	
	
	
	
	
	
	
	
	</script>
	
</head>
<body>
<main>
<section id="sec"><article><h3>ADMIN</h3></article><article id="art"><button id="bt">LOG OUT</button></article><h3></section>
<section id="se">
	<article id="art1">
		<article id="art3">
			<section class="dropdown">
		
				<button class="dropbtn">Set Question</button>
				
				   <section class="dropdown-content">
					  
						<a href="question.php" target="tt" onclick="add()">Fresher</a>
						<a href="">Exp<1</a>
						<a href="bb.php" >Exp>1</a>
						<a href="g.php" >Exp>2</a>
					
					</section>
				
				 </section>
				 
			<section id="dro">
		
				<a href="candidatedetail.php" target="tt"><button class="dropbtn">Existing user</button></a>

				  
			 </section>
			 
			 	 
			<section id="dro">
		
				<button class="dropbtn" onclick="ad()" >Add user</button>

				  
			 </section>
	

	
		</article>
	
	</article>
	<article id="art2">
	
		

	</article>
	
</section>


</main>
</body>
</html>
