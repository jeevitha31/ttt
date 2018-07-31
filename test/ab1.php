
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Fixed Header/Full Page Content</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
<!--
            body,
            div {
                margin: 0;
                padding: 0;
                
            }

            body {
              
                overflow: hidden;
                width: 100%;
                height: 100%;
            }
-->

            #header {
                
                overflow: auto;
                position: absolute;
                width: 100%;
                height: 90px;
               
                float:left;
            }

            #main {
               
              
              	position:absolute;
                width: 676px;
                top: 90px;
                bottom: 0;
                float:left;
                overflow-y: auto;
                border-width: 0px 3px 0px 0px;
                border-style: solid;
                
               
            }
            #div
            {
				width: 1363px;
		
				height:800px;
				top:100px;
				
				
				
			}
			#main_sub
			{
		
				height: 600px;
				width: 1185px;
				float:right;
				margin-top:  103px;
				overflow:auto;
				
				
			}
            .head_main
			{
				position: fixed;
				overflow: hidden;
				box-shadow: 0px 0px 2px 0px;
				width: 100%;
				top: 0px;
				left: 0px;
				
			}
			.head_img
			{
				left: 39%;
				box-shadow: 0px 0px 1px 0px;
				width: 26%;
				display:inline-block;
			}
			.head_log
			{
				float: right;
				display:inline-block;
				top: 60%;
				padding: 25px 0px;
			}
			.head_admin
			{
				display:inline-block;
				left: 53%;
				position: absolute;
			}
			#head_button
			{
				border: 0px solid;
				height: 30px;
				width: 108px;
				color: #9f9faa;
				background-color: #f3f0ea;
			}
            
            #iframe
            {
				
				width: 1185px;
				margin-top:-13px;
				position:absolute;
				overflow:auto;
				height:564px;
				
			
				
			}
            

            body { 
	background: #EEE; 
	overflow-x:hidden;
}
.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}

.container {
    position: relative;
    margin: 0px auto;
    padding: 50px 0;
    clear: both;
}
@media only screen and (min-width: 1200px) {
    .container {
        width: 1210px;
    }
}

@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .container {
        width: 1030px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .container {
        width: 682px;
    }
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
    .container {
        width: 428px;
        margin: 0 auto;
    }
}

@media only screen and (max-width: 479px) {
    .container {
        width: 320px;
        margin: 0 auto;
    }
}


  
.mcd-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*height: 100px;*/
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  
  /* == */
  width: 250px;
  /* == */
}
.mcd-menu li {
  position: relative;
  /*float:left;*/
}
.mcd-menu li a {
  display: block;
  text-decoration: none;
  padding: 12px 20px;
  color: #777;
  /*text-align: center;
  border-right: 1px solid #E7E7E7;*/
  
  /* == */
  text-align: left;
  height: 36px;
  position: relative;
  border-bottom: 1px solid #EEE;
  /* == */
}
.mcd-menu li a i {
  /*display: block;
  font-size: 30px;
  margin-bottom: 10px;*/
  
  /* == */
  float: left;
  font-size: 20px;
  margin: 0 10px 0 0;
  /* == */
  
}
/* == */
.mcd-menu li a p {
  float: left;
  margin: 0 ;
}
/* == */

.mcd-menu li a strong {
  display: block;
  text-transform: uppercase;
}
.mcd-menu li a small {
  display: block;
  font-size: 10px;
}

.mcd-menu li a i, .mcd-menu li a strong, .mcd-menu li a small {
  position: relative;
  
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
}
.mcd-menu li:hover > a i {
    opacity: 1;
    -webkit-animation: moveFromTop 300ms ease-in-out;
    -moz-animation: moveFromTop 300ms ease-in-out;
    -ms-animation: moveFromTop 300ms ease-in-out;
    -o-animation: moveFromTop 300ms ease-in-out;
    animation: moveFromTop 300ms ease-in-out;
}
.mcd-menu li:hover a strong {
    opacity: 1;
    -webkit-animation: moveFromLeft 300ms ease-in-out;
    -moz-animation: moveFromLeft 300ms ease-in-out;
    -ms-animation: moveFromLeft 300ms ease-in-out;
    -o-animation: moveFromLeft 300ms ease-in-out;
    animation: moveFromLeft 300ms ease-in-out;
}
.mcd-menu li:hover a small {
    opacity: 1;
    -webkit-animation: moveFromRight 300ms ease-in-out;
    -moz-animation: moveFromRight 300ms ease-in-out;
    -ms-animation: moveFromRight 300ms ease-in-out;
    -o-animation: moveFromRight 300ms ease-in-out;
    animation: moveFromRight 300ms ease-in-out;
}

.mcd-menu li:hover > a {
  color: #e67e22;
}
.mcd-menu li a.active {
  position: relative;
  color: #e67e22;
  border:0;
  /*border-top: 4px solid #e67e22;
  border-bottom: 4px solid #e67e22;
  margin-top: -4px;*/
  box-shadow: 0 0 5px #DDD;
  -moz-box-shadow: 0 0 5px #DDD;
  -webkit-box-shadow: 0 0 5px #DDD;
  
  /* == */
  border-left: 4px solid #e67e22;
  border-right: 4px solid #e67e22;
  margin: 0 -4px;
  /* == */
}
.mcd-menu li a.active:before {
  content: "";
  position: absolute;
  /*top: 0;
  left: 45%;
  border-top: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  
  /* == */
  top: 42%;
  left: 0;
  border-left: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  /* == */
}

/* == */
.mcd-menu li a.active:after {
  content: "";
  position: absolute;
  top: 42%;
  right: 0;
  border-right: 5px solid #e67e22;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
}
/* == */

@-webkit-keyframes moveFromTop {
    from {
        opacity: 0;
        -webkit-transform: translateY(200%);
        -moz-transform: translateY(200%);
        -ms-transform: translateY(200%);
        -o-transform: translateY(200%);
        transform: translateY(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateY(0%);
        -moz-transform: translateY(0%);
        -ms-transform: translateY(0%);
        -o-transform: translateY(0%);
        transform: translateY(0%);
    }
}
@-webkit-keyframes moveFromLeft {
    from {
        opacity: 0;
        -webkit-transform: translateX(200%);
        -moz-transform: translateX(200%);
        -ms-transform: translateX(200%);
        -o-transform: translateX(200%);
        transform: translateX(200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}
@-webkit-keyframes moveFromRight {
    from {
        opacity: 0;
        -webkit-transform: translateX(-200%);
        -moz-transform: translateX(-200%);
        -ms-transform: translateX(-200%);
        -o-transform: translateX(-200%);
        transform: translateX(-200%);
    }
    to {
        opacity: 1;
        -webkit-transform: translateX(0%);
        -moz-transform: translateX(0%);
        -ms-transform: translateX(0%);
        -o-transform: translateX(0%);
        transform: translateX(0%);
    }
}



.mcd-menu li ul,
.mcd-menu li ul li ul {
  position: absolute;
  height: auto;
  min-width: 200px;
  padding: 0;
  margin: 0;
  background: #FFF;
  /*border-top: 4px solid #e67e22;*/
  opacity: 0;
  visibility: hidden;
  transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -webkit-transition: all 300ms linear;
  /*top: 130px;*/
  z-index: 1000;
  
  /* == */
  left:280px;
  top: 0px;
  border-left: 4px solid #e67e22;
  /* == */
}
.mcd-menu li ul:before {
  content: "";
  position: absolute;
  /*top: -8px;
  left: 23%;
  border-bottom: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/
  
  /* == */
  top: 25px;
  left: -9px;
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
  /* == */
}
.mcd-menu li:hover > ul,
.mcd-menu li ul li:hover > ul {
  display: block;
  opacity: 1;
  visibility: visible;
  /*top: 100px;*/
  
  /* == */
  left:250px;
  /* == */
}
/*.mcd-menu li ul li {
  float: none;
}*/
.mcd-menu li ul li a {
  padding: 10px;
  text-align: left;
  border: 0;
  border-bottom: 1px solid #EEE;
  
  /* == */
  height: auto;
  /* == */
}
.mcd-menu li ul li a i {
  font-size: 16px;
  display: inline-block;
  margin: 0 10px 0 0;
}
.mcd-menu li ul li ul {
  left: 230px;
  top: 0;
  border: 0;
  border-left: 4px solid #e67e22;
}  
.mcd-menu li ul li ul:before {
  content: "";
  position: absolute;
  top: 15px;
  /*left: -14px;*/
  /* == */
  left: -9px;
  /* == */
  border-right: 5px solid #e67e22;
  border-bottom: 5px solid transparent;
  border-top: 5px solid transparent;
}
.mcd-menu li ul li:hover > ul {
  top: 0px;
  left: 200px;
}



/*.mcd-menu li.float {
  float: right;
}*/
.mcd-menu li a.search {
  /*padding: 29px 20px 30px 10px;*/
  padding: 10px 10px 15px 10px;
  clear: both;
}
.mcd-menu li a.search i {
  margin: 0;
  display: inline-block;
  font-size: 18px;
}
.mcd-menu li a.search input {
  border: 1px solid #EEE;
  padding: 10px;
  background: #FFF;
  outline: none;
  color: #777;
  
  /* == */
  width:170px;
  float:left;
  /* == */
}
.mcd-menu li a.search button {
  border: 1px solid #e67e22;
  /*padding: 10px;*/
  background: #e67e22;
  outline: none;
  color: #FFF;
  margin-left: -4px;
  
  /* == */
  float:left;
  padding: 10px 10px 11px 10px;
  /* == */
}
.mcd-menu li a.search input:focus {
  border: 1px solid #e67e22;
}


.search-mobile { 
	display:none !important;
	background:#e67e22;
	border-left:1px solid #e67e22;
	border-radius:0 3px 3px 0;
}
.search-mobile i { 
	color:#FFF; 
	margin:0 !important;
}


@media only screen and (min-width: 960px) and (max-width: 1199px) {
    .mcd-menu {
		margin-left:10px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 959px) {
    .mcd-menu {
		width: 200px;
	}
	.mcd-menu li a {
		height:30px;
	}
	.mcd-menu li a i {
		font-size: 22px;
	}
	.mcd-menu li a strong {
		font-size: 12px;
	}
	.mcd-menu li a small {
		font-size: 10px;
	}	
	.mcd-menu li a.search input {
		width: 120px;
		font-size: 12px;
	}
	.mcd-menu li a.search buton{
		padding: 8px 10px 9px 10px;
	}
	.mcd-menu li > ul {
		min-width:180px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:200px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:150px;
		min-width:150px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
	
	.mcd-menu { 
		width: 50px;
	}
	.mcd-menu li a { 
		position: relative;
		padding: 12px 16px;
		height:20px;
	}
	.mcd-menu li a small { 
		display: none;
	}
	.mcd-menu li a strong { 
		display: none;
	}
	.mcd-menu li a:hover strong,.mcd-menu li a.active strong {
		display:block;
		font-size:10px;
		padding:3px 0;
		position:absolute;
		bottom:0px;
		left:0;
		background:#e67e22;
		color:#FFF;
		min-width:100%;
		text-transform:lowercase;
		font-weight:normal;
		text-align:center;
	}
	.mcd-menu li .search { 
		display: none;
	}
	
	.mcd-menu li > ul {
		min-width:180px;
		left:70px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:50px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li > ul {
		left:35px;
		top: 45px;
		border:0;
		border-top:4px solid #e67e22;
	}
	.mcd-menu li ul li ul li > ul:before {
		left:30px;
		top: -9px;
		border:0;
		border-bottom:5px solid #e67e22;
		border-left:5px solid transparent;
		border-right:5px solid transparent;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:30px;
		min-width:150px;
		top: 35px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
	
}

@media only screen and (max-width: 479px) {
    .mcd-menu { 
		width: 50px;
	}
	.mcd-menu li a { 
		position: relative;
		padding: 12px 16px;
		height:20px;
	}
	.mcd-menu li a small { 
		display: none;
	}
	.mcd-menu li a strong { 
		display: none;
	}
	.mcd-menu li a:hover strong,.mcd-menu li a.active strong {
		display:block;
		font-size:10px;
		padding:3px 0;
		position:absolute;
		bottom:0px;
		left:0;
		background:#e67e22;
		color:#FFF;
		min-width:100%;
		text-transform:lowercase;
		font-weight:normal;
		text-align:center;
	}
	.mcd-menu li .search { 
		display: none;
	}
	
	.mcd-menu li > ul {
		min-width:180px;
		left:70px;
	}
	.mcd-menu li:hover > ul {
		min-width:180px;
		left:50px;
	}
	.mcd-menu li ul li > ul, .mcd-menu li ul li ul li > ul {
		min-width:150px;
	}
	.mcd-menu li ul li:hover > ul {
		left:180px;
		min-width:150px;
	}
	.mcd-menu li ul li ul li > ul {
		left:35px;
		top: 45px;
		border:0;
		border-top:4px solid #e67e22;
	}
	.mcd-menu li ul li ul li > ul:before {
		left:30px;
		top: -9px;
		border:0;
		border-bottom:5px solid #e67e22;
		border-left:5px solid transparent;
		border-right:5px solid transparent;
	}
	.mcd-menu li ul li ul li:hover > ul {
		left:30px;
		min-width:150px;
		top: 35px;
	}
	.mcd-menu li ul a {
		font-size:12px;
	}
	.mcd-menu li ul a i {
		font-size:14px;
	}
    
}

            
            
            
            
            
            
        </style>
        
        <script>
        
        function fun()
        {
			alert("hii");
		}
		  

        
        
        
        
        
        
        </script>
        
        
        
        
        
        
        
        
      
        
        
        
        
    </head>
    <body>
        <div id="header">
        
        
        
        <div class="head_main"  >
			
				<div class="head_img">
					<img src="icons.png" height=90px; width=350px;>
				</div>
				<div class="head_log">
					<button id="head_button">Logout</button>
				</div>
			
		</div>
        </div>
        <div id="div">
		
        <div id="main">
			
			
			
			
			
			
			
			
			
			<div class="container">
<nav>
		<ul class="mcd-menu">
			<li>
				<a href="" onclick="fun()" id="aa">
					<i class="fa fa-home"></i>
					<strong>Set</strong>
					<small>Questions</small>
				</a>
			</li>
			<li>
				<a href="" class="active">
					<i class="fa fa-edit"></i>
					<strong>Add </strong>
					<small>candidate</small>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-gift"></i>
					<strong>Evalute</strong>
					<small>candidate answers</small>
				</a>
			</li>
		
			<li>
				<a href="">
					<i class="fa fa-comments-o"></i>
					<strong>Blog</strong>
					<small>what they say</small>
				</a>
				<ul>
					<li><a href="#"><i class="fa fa-globe"></i>Mission</a></li>
					<li>
						<a href="#"><i class="fa fa-group"></i>Our Team</a>
						<ul>
							<li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
							<li>
								<a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
								<ul>
									<li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
									<li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
					<li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
				</ul>
			</li>
			
			<li>
				<a href="">
					<i class="fa fa-envelope-o"></i>
					<strong>Contacts</strong>
					<small>drop a line</small>
				</a>
			</li>
			
		</ul>
	</nav>
</div>
  
			
			
			
			
			
			
         
            
            
        </div>
        <div id="main_sub" >
			
			
			
			
			
			
			
			
			
			
			
			
			
        
        <iframe name="iframe" id="iframe" frameborder="0"></iframe>
        
        
        
        
        
        </div></div>
        </body>
        </html>
