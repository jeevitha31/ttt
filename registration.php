<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
		
		
		
		<style>
		#ff
		{
			background-image: url(download.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			width: 100%;
			height: 100%;
		}
		
		
		</style>
		
		<script>
		
		
		$(document).ready(function(){
			
		var state = ["Tamil Nadu","Delhi","kerala","Andhra Pradesh","Gujarat","Rajasthan"];     
		var sel = document.getElementById('StateList');
		for(var i = 0; i < state.length; i++) {
		var opt = document.createElement('option');
		opt.text = state[i];
		opt.value =  state[i].toLowerCase().replace(" ", "");
		sel.appendChild(opt);
		
		
		 $('#contactForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }

                }
            },
            
          
            qual: {
                validators: {
                    notEmpty: {
                        message: 'Qualification is required and cannot be empty'
                    },
                regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }
                   
                }
            },
            
            dept: {
                validators: {
                    notEmpty: {
                        message: 'Department  is required and cannot be empty'
                    },
                    regexp: {
					regexp: /^[a-z\s]+$/i,
					message: 'Invalid Format'
         }
                   
                }
            },
            optradio: {
                validators: {
                    notEmpty: {
                        message: ' choose Sex and cannot be empty'
                    }
                   
                }
            },
             lan: {
                validators: {
                    notEmpty: {
                        message: 'Language is required and cannot be empty'
                    },
                  regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }
                   
                }
            },
             StateList: {
                validators: {
                    notEmpty: {
                        message: 'Select the state and cannot be empty'
                    }
                   
                }
            },
             DistrictList: {
                validators: {
                    notEmpty: {
                        message: 'Select the district and cannot be empty'
                    }
                   
                }
            },
             CollegeList: {
                validators: {
                    notEmpty: {
                        message: 'Select the college and cannot be empty'
                    }
                   
                }
            }
             
             
        }
       
    });	
	
}	
		});
		function  fun(val)
		{
	
			//~ var sel = document.getElementById("CollegeList");
			//~ while (sel.options.length > 0) { 
			//~ sel.remove(0); 
		//~ } 
			var od = {'state':val,'type':'state'};
			
			call(od,od.type,od.state)
		}
			
		function call(val,type,value)
		{
			
			 $.ajax({
					url: 'list.php',
					type: 'POST',
					dataType   : 'json',
					data: val,
					success: function(result) {
		alert(result);
					//dis(result,type,value);
						},
					error: function(e) {
	
				alert(e);
			}
		});
			
		}
		
		function dis(response,type,stat)
		{
		switch(type) {

        case 'state':
           district(response,stat)
        break;
        case 'district':
           college(response,type)
        break;	
			}
		}
		function district(dis,stat)
		{
			var select = document.getElementById("DistrictList");
			var sel = document.getElementById("CollegeList");
			
			while (select.options.length > 0) { 
			 select.remove(0); 
			 sel.remove(0); 
			 } 
			for(var i = 0; i < dis.length; i++) {
		  
			var op = document.createElement("option");
			op.text = dis[i];
			op.value = dis[i].toLowerCase().replace(" ", "")+','+stat;
			select.appendChild(op);
			}		
		}		
		function func(val)
		{

			var odc = {'district':val,'type':'district'};
			call(odc,odc.type,null)
		}	
		function college(val)
		{
			var select = document.getElementById("CollegeList");
			while (select.options.length > 0) { 
			select.remove(0); 
				} 
			for(var i = 0; i < val.length; i++) {
		  
			var op = document.createElement("option");
			op.text = val[i];
			op.value = val[i].toLowerCase().replace(" ", "");
			select.appendChild(op);
				
			}
			
		}

		</script>
		
	</head>
	<body>
		<div class="container">
			
			<div class="panel panel-default">
					<div class="panel-body" id="ff">

				<div class="row">
					<div class="col-md-12 " >
						<h2 class="col-md-offset-4">Registration form</h2>
					
					</div>
				
				</div>
				
				<div class="row">
					<div class="col-md-12">

						<form action="dropd.php" id="contactForm" method="POST" data-toggle="validator" role="form" class="col-md-8 col-md-offset-4 form-horizontal">
							<div class="row col-md-12">
								  <div class="form-group col-md-7 ">
									<label for="name" class=" control-label">Name:</label>
									<input type="text" class="form-control" id="name" name="name" >
								  </div>
							 </div>
							 
							 <div class="row col-md-12">
								  <div class="form-group col-md-7 ">
									<label for="qual">Qualification:</label>
									<input type="text" class="form-control" id="qual"  name="qual">
								  </div>
							  </div>
							  
							   <div class="row col-md-12">
								  <div class="form-group col-md-7 ">
									<label for=" optradio" >Sex:</label>
										<label class="radio-inline">
											  <input type="radio" name="optradio" value="Male">Male
										</label>
										<label class="radio-inline" >
											<input type="radio" name="optradio" value="Female">Female
										</label>
								  </div>
							  </div>
							  
								<div class="row col-md-12">
								  <div class="form-group col-md-7 ">
									<label for="dept">Department:</label>
									<input type="text" class="form-control" id="dept" name="dept">
								  </div>
							 </div>
									
							<div class="row col-md-12">
								<div class="form-group col-md-7 ">
									<label for="lan">Language:</label>
									<input type="text" class="form-control" id="lan" name="lan">
								  </div>
							 </div>

							  
							  <div class="row col-md-12">
							  <div class="form-group col-md-7">
								<label for="StateList">State:</label>
									<select class="form-control" id="StateList" name ="StateList" onchange="return fun(this.value)" >
										<option></option>
									</select>
								</div>
								</div>

								 <div class="row col-md-12">
							  <div class="form-group col-md-7">
								<label for="DistrictList">District:</label>
									<select class="form-control" id="DistrictList" name= "DistrictList" onchange="return func(this.value)"  >
											
									</select>
								</div>
								</div>
								
								 <div class="row col-md-12">
							  <div class="form-group col-md-7">
								<label for="CollegeList">College:</label>
									<select class="form-control" id="CollegeList" name="CollegeList" >
											
									</select>
								</div>
								</div>
								
								<div class="row col-md-12">
								<div class="form-group  col-md-7">
								<div id="messages"></div>
									</div>
									</div>

								
								 <div class="row col-md-12">
							  <div class="form-group col-md-7">
								
								<button type="submit" class="btn btn-primary">Submit</button>
								</div>
								</div>


								
								
								  </div>
							  </div>
							 
						</form>

					</div>
			</div>
			</div>
			</div>
		</div>
		
	</body>

</html>

