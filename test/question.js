function setfun(){
	var language = document.querySelector('input[type="radio"]:checked').value;
	var lang = document.getElementById("lang").value = language;
	var span = document.getElementById("lan").innerHTML = language;
	 
 }

function myfun(){
	var option_answer = document.getElementById("option_answer");
	option_answer.value = "";	
	alert('option_answer clear');
	return true;
	}

function mysubmit(){
	var text_answer = document.getElementById("text_answer");
	text_answer.value = "";	
	alert('text_answer clear');
	return true;
	}
	
function funtext(){
		document.getElementById("area").style.display = "inline";
		document.getElementById("option").style.display = "none";
		
		document.getElementById('hidden_text').value = "text_area";
		document.getElementById('hidden_radio').value = "";
}

function fun_radio(){
		document.getElementById("option").style.display = "inline";
		document.getElementById("area").style.display = "none";
		
		document.getElementById('hidden_radio').value = "radio";
		document.getElementById('hidden_text').value = "";
}

function funtext_area(){
	var form = document.getElementById("ques");
	form.action = "question_controller.php";
	alert(form.action);
	document.getElementById("ques").submit();
	}
	
function funoption(){
	var form = document.getElementById("ques");
	form.action = "question_controller2.php";
	alert(form.action);
	document.getElementById("ques").submit();
	}
	
