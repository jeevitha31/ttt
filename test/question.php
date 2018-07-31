<html>
<head>
	<style>
		#div
		{
			width:100%;
			height:4%;
			margin-top:-15px;
			
			
		}
		#hh
		{
			
		color:rgb(128, 31, 15);
		
		
		}
		#div1
		{
			width:1100px;
			height:100%;
			float:right;
		}
		
		.main {
			margin-top:3px;
			position: relative;
			width: 100%;
			height: 96%;
			
		}
			
		.first{   
			width: 70%;
			background: #f0f0f0;
			height: 100%;
			position: absolute;

		}
	.second{   
		width: 30%;
	  
	<!--
		background: #2884ec;
	-->
		height: 100%;
		position: absolute;
		left: 70%;
	}
	.Fresher{
		 width:100%;
		 height:100%;
		
		float:right;
		}
		button
		{
			width:215px;
			height:100%;
		}
		#php,#javascript,#mysql,#html,#css 
		{
			display:none;
		
			
		 }
		 
		 .div3:hover
		{
			color:red;
			background:pink;
			
		
			
		 }
		 
		.div3
		{
			width:153px;
			height:6%;
			border:1px solid rgb(153,76,87);
		   float:left;
			font-size:25px;
			font-size:24px;
			background:rgb(20, 146, 146);
			color: #693d61;

		}
		

	</style>
	
<script>
</script>
<script src="question.js"></script>
</head>
<body>
<div id="div">


<h2 id="hh">FRESHER</h2>


</div>

<div class="main">	
	<div class="first">	
		
		
		
		<div class="Fresher">
			
			<div class="div3"><center><label for="php"><input type="radio" id="php" name="language" value="php" onclick="return setfun()" checked >PHP</label></center>
			</div>
		
			<div class="div3"><center><label for="mysql"><input type="radio" id="mysql" name="language"value="mysql" onclick="return setfun()">MYSQL</label></center>
			</div>
			
			<div class="div3"><center><label for="javascript"><input type="radio" id="javascript" name="language" value="javascript" 	onclick="return setfun()">JAVASCRIPT</label></center>
			</div>
			
			<div class="div3"><center><label for="css"><input type="radio" id="css" name="language" value="css" onclick="return setfun()">CSS</center></label>
			</div>
			
			<div class="div3"><center><label for="html"><input type="radio" id="html" name="language" value="html" onclick="return setfun()">HTML</label></center>
			</div>
		
	
		
		
		<form method = "POST" id="ques" action="question_controller.php"><center>
		<input type="hidden" value="" id="lang" name="language"> <br><br>	
					<div>
						<h3>Insert New Question: <span id="lan">php</span></h3>
						<span>question pattern no:</span>
					</div>
			
			Question: <input type="text" name="question" id="question"><br><br>
			
			<input type="button" value="radio" name="radio_button" id="radio" onclick="return fun_radio()">
			<input type="button" value="text_area" name="text_area_button" id="text_area" onclick="return funtext()"><br>
					
			
			<div id="option" style = "display: none"><br>
			
				<input type="hidden" value="" id="hidden_radio" name="radio">
				
				option 1:<input type="text" id="opt1" name="option1"><br>
				option 2:<input type="text" id="opt2" name="option2"><br>
				option 3:<input type="text" id="opt3" name="option3"><br>
				option 4:<input type="text" id="opt4" name="option4"><br><br>
				
				Answer: <input type="text" id="option_answer" name="option_answer"><br>
				
				<input type="submit" name="submit" onclick="return mysubmit();" value="ADD">
			</div>		
			
			
			<div id="area" style = "display: none"><br>
				
				<input type="hidden" value="" id="hidden_text" name="text_area">
				
				Answer: <textarea cols=50 rows=5 id="text_answer" name="text_answer"></textarea><br>
				
				<input type="submit" id="text_area" name="submit" onclick="return myfun();" value="ADD">
			</div>
		</form>
		
	</center></div>
</div>
<div class="second">
		<center>
		<div><h2>Update Questions</h2>
			<form method="POST" action="#">
				<select>
			<option value="select" >select</option>
		<?php
		include 'db.php';	
		$query = "select * from fresher_questions";
		$result = mysqli_query($con, $query);
		while ($row = mysqli_fetch_array($result)) { ?>					
			<option value="<?php echo $row['lang'] ?>"><?php echo $row['lang'] ?></option>
		<?php }?>	
			</select>
					
			</form>
		</div></center>
</div>
</div>
</body>
</html>





