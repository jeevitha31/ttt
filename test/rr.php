
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Fixed Header/Full Page Content</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
            body,
            div {
                margin: 0;
                padding: 0;
                
            }

            body {
                /* Disable scrollbars and ensure that the body fills the window */
                overflow: hidden;
                width: 100%;
                height: 100%;
            }

            #header {
                /* Provide scrollbars if needed and fix the header dimensions */
                overflow: auto;
                position: absolute;
                width: 100%;
                height: 90px;
               
                float:left;
            }

            #main {
                /* Provide scrollbars if needed, position below header, and derive height from top/bottom */
              
              	 position:absolute;
                width: 176px;
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
				height: 600px;
				width: 1185px;
				margin-top:-13px;
				position:absolute;
				overflow:auto;
			
				
			}
            
            
            
            
            
            
            
            
            
        </style>
        
        <script>
        
        
		
        
        
        
        
        
        
        
        
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
           <a href="rs.php" target="iframe"> <button onclick="add()" >Fresher</button></a>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
            <p>MAIN</p>
           
        </div>
        <div id="main_sub" >
        
        <iframe name="iframe" id="iframe"></iframe>
        
        
        
        
        
        </div></div>
        </body>
        </html>
