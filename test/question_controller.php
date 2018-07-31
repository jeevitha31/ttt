<?php
//~ class question_controller{

//~ public function __construct(){


//SELECT * FROM questions ORDER BY RAND() LIMIT 3 //random picking value from table
		
include 'db.php';

if(isset($_POST['submit'])){
	
			$question = $_POST['question'];
			$language = $_POST['language'];			
			$option1 = $_POST['option1'];
			$option2 = $_POST['option2'];
			$option3 = $_POST['option3'];
			$option4 = $_POST['option4'];
			
			$option_answer = $_POST['option_answer'];
			$text_answer = $_POST['text_answer'];
			
	$radio = $_POST['radio'];		
	$text_area = $_POST['text_area'];	
	
if(empty($text_answer) && $radio == 'radio'){	
	
	if(empty($question) || empty($option1) || empty($option2) || empty($option3) || empty($option4) || empty($option_answer))
	{
		echo "<script>alert('option fields are empty')</script>";		
		 echo '<script>window.location="question.php";</script>';
	}
	else{
	
		$answer = $option_answer;
		
		$insert = "INSERT INTO `questions`(question, answer, option1, option2, option3, option4, option5, lang, ques_type)
								VALUES ('$question', '$answer', '$option1', '$option2', '$option3', '$option4', '$option5','$language', 'radio');";
	
			$result =  mysqli_query($con, $insert);
			
			if(!empty($result)){
				echo "<script>alert('sucess')</script>";
				
				$last_id = $con->insert_id;
				echo $last_id;
				
			if($last_id > 5){
				echo "<script>alert('please change the question paper name')</script>";				
				}				
				}
			else{
				echo "<script>alert('not sucess')</script>";
				}
		}
	}
	
	else
	if(empty($option_answer) && $text_area == 'text_area'){
		
		if(empty($question) || empty($text_answer))
		{
			echo "<script>alert('text_area fields are empty')</script>";	
			echo '<script>window.location="question.php";</script>';	
		}
		else{
			$answer = $text_answer;
	
			$insert = "INSERT INTO `fresher_questions`(question, answer, lang, que_type)
									VALUES ('$question', '$answer' , '$language', 'text_area')";		
			
			$result =  mysqli_query($con, $insert);
			
			if(!empty($result)){
				echo "<script>alert('sucess')</script>";
				echo '<script>window.location="question.php";</script>';
				
				//~ $last_id = $con->insert_id;
				//~ echo $last_id;
				
			if($last_id > 5){
				echo "<script>alert('questions overloaded')</script>";				
				}		
				}
			else{
				echo "<script>alert('not sucess')</script>";
				}
	}
}	
}
else{
	echo "<script>alert('not valid')</script>";
	}
//~ }
//~ }
