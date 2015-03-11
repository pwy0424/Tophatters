<?php
	session_start();
	$_SESSION['color'];
	$_SESSION['size'];	
	$username = $_SESSION['username'];
?>		

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Chat Room</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Dont actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type="text/javascript" src="jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
    
    <style>
    .top-buffer{
    
    margin-top: 10%;
    
    }
    
    #smallPanel .panel
    {
    	height: 700px;
    	overflow: hidden;
    	position: relative;
    	display:block;
    	
    }
    
    #largePanel .panel
    {	
    	height: 400px;
    	overflow: hidden;
    	position: relative;
    	display:block;
    	
    }
    
    #smallerPanel .panel
    {	
    	height: 70px;
    	position: relative;
    	display:block;
    	
    }
    
    #mediumPanel .panel
    {	
    	height: 190px;
    	position: relative;
    	display:block;
    	margin:1px;
    }
    
    #smallestPanel .panel
    {	
    
    	margin:1px;
    }

    </style>
    

    
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="#">
          	<img class="logo" src="img/LOGO.png" width="30px" height="5%" >
          	Project Manager
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="group_forming.php">Group Forming</a></li>
            <li class="active"><a href="chatroom.php">Chat Room</a></li>
            <li><a href="task_management.php">Task Management</a></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Class Selection <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">CS 465</a></li>
                <li><a href="#">CS 498</a></li>
                <li><a href="#">More</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href='profile.php'><?php echo $username ?></a></li>
          <li><a href='logout.php'>Log out</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase">

      <div class="top-buffer">
      	
      <div>

      <div class="page-header">
        <h1>Chat Room</h1>
      </div>



    </div> <!-- /container -->

	
      
	<div class="col-sm-3">
	<div id="smallPanel">
	  <div id="panel1" class="panel panel-primary text-align:left">
	    <div class="panel-heading">
	      <h3 class="panel-title">Task Reminder</h3>
	    </div>
	    
	    <div class="panel-body">
	    <div id='sb1'>
	                <h4>Tasks this week<h4>
	                <div class="thumbnail">
			      <div class="caption">
			        
			        <span class="label label-danger" style="font-size:15px">Finish Poster</span>
			        <h5>Si Chen, Prinn</h5>
			        <h5>Due by 5pm Nov.30</h5>
			      </div>
			    </div><br>
	                 <h4>Tasks next week<h4>
	               <div class="thumbnail">
			      <div class="caption">
			        
			        <span class="label label-success" style="font-size:15px">Submit User Evaluation</span>
			        <h5>All Team Members</h5>
			        <h5>Due by 5pm Dec.2</h5>
			      </div>
			    </div>
	               <div class="thumbnail">
			      <div class="caption">
			        
			        <span class="label label-success" style="font-size:15px">Finish High-Fi Prototype</span>
			        <h5>Yifang Zhang, Weiyang Pan</h5>
			        <h5>Due by 5pm Dec.8</h5>
			      </div>
			    </div>
	    </div>
	    </div>
	  </div>
	<script type="text/javascript">
          jQuery(document).ready(function($) {
 		$('#sb1').slimScroll({
		  height: '630px'
		 });
		 });
     	</script>
	</div>
	</div>
	
	<div class="col-sm-7">
	<div id="largePanel">
	  <div id="panel1" class="panel panel-primary text-align:left">
	    <div class="panel-body">
	    <div id='sb2'>
	        <?php
	        		echo $_SESSION['uploadurl'];
	        		$file = 'chatlog.txt';
				$current = file_get_contents($file);
				if($_SESSION['color']==NULL) 
				      $_SESSION['color']='black';
				if($_SESSION['size']==NULL) 
				      $_SESSION['size']='2';
				if($_SESSION['face']==NULL) 
				      $_SESSION['face']='Time New Roman';
			        if($_SESSION['sendto']==NULL) 
				      $_SESSION['sendto']='Everyone';
				      
				
	        		if($_GET['textboxinput'] && $_SESSION['sendto']=="Everyone"){
		        		$time = time();
		        		//echo date('d/m - H:ia', $time);
					// Append a new person to the file
					$current .= date('[m/d H:i]  ',$time).
					"<font size=".$_SESSION['size']
					." face=".$_SESSION['face']
					." color=".$_SESSION['color'].">".$_SESSION['username'].": ".$_GET['textboxinput']."</font>"."<br>\n";
					// Write the contents back to the file
					file_put_contents($file, $current);
				}
				
				if($_GET['textboxinput'] && $_SESSION['sendto']!="Everyone"){
		        		$time = time();
		        		//echo date('d/m - H:ia', $time);
					// Append a new person to the file
					$current .= date('[m/d H:i]  ',$time).
					"<font size=".$_SESSION['size']
					." face=".$_SESSION['face']
					." color=".$_SESSION['color'].">".$_SESSION['username']."(to ".$_SESSION['sendto']."): ".$_GET['textboxinput']."</font>"."<br>\n";
					// Write the contents back to the file
					file_put_contents($file, $current);
				}
				
				echo $current;
		?>
		
            </div>
	    </div>
	  
        </div>

	  </div>
	<script type="text/javascript">
          jQuery(document).ready(function($) {
 		$('#sb2').slimScroll({
		  height: '370px',
		  start:"bottom"
		 });
		 });
		 
     	</script>
     	
     	

	  
	  <div id="smallerPanel">
	  <div id="panel2" class="panel panel-primary text-align:left">
	    <div class="panel-body">
	    
		     <ul class="nav nav-pills">
		       <li class="dropdown">
	   		 <a class="dropdown-toggle" data-toggle="dropdown" style="margin-left:20px" href="#">
	                 Text Size <span class="caret"></span>
	                 </a>
	                 <ul class="dropdown-menu">
	                      <li role="presentation"><a role="menuitem" tabindex="-1" href="?size=2"><font size="2">2</font></a></li>
	                       <li role="presentation"><a role="menuitem" tabindex="-1" href="?size=3"><font size="3">3</font></a></li>
	                        <li role="presentation"><a role="menuitem" tabindex="-1" href="?size=4"><font size="4">4</font></a></li>
	                         <li role="presentation"><a role="menuitem" tabindex="-1" href="?size=5"><font size="5">5</font></a></li>
	                          <li role="presentation"><a role="menuitem" tabindex="-1" href="?size=6"><font size="6">6</font></a></li>
	                           <li role="presentation"><a role="menuitem" tabindex="-1" href="?size=7"><font size="7">7</font></a></li>
	                 </ul>
	               </li>
	               
	               <li class="dropdown">
	   		 <a class="dropdown-toggle" data-toggle="dropdown" style="margin-left:20px" href="#">
	                 Text Font <span class="caret"></span>
	                 </a>
	                 <ul class="dropdown-menu">
	                       <li role="presentation"><a role="menuitem" tabindex="-1" href="?face=Times New Roman">Time New Roman</a></li>
	                       <li role="presentation"><a role="menuitem" tabindex="-1" href="?face=Script">Script</a></li>
	                       <li role="presentation"><a role="menuitem" tabindex="-1" href="?face=Courier">Courier</a></li>
	                       <li role="presentation"><a role="menuitem" tabindex="-1" href="?face=Arial">Arial</a></li>
	                       <li role="presentation"><a role="menuitem" tabindex="-1" href="?face=Helvetica">Helvetica</a></li>
	                         
	                 </ul>
	               </li>
	               
	               <li class="dropdown">
	   		 <a class="dropdown-toggle" data-toggle="dropdown" style="margin-left:20px" href="#">
	                Text Color <span class="caret"></span>
	                 </a>
	                 <ul class="dropdown-menu">
	                     <li role="presentation"><a role="menuitem" tabindex="-1" style="color: black" href="?color=black">Black</a></li>
	                      <li role="presentation"><a role="menuitem" tabindex="-1" style="color: blue" href="?color=blue">Blue</a></li>
	                       <li role="presentation"><a role="menuitem" tabindex="-1" style="color: red" href="?color=red">Red</a></li>
	                        <li role="presentation"><a role="menuitem" tabindex="-1" style="color: orange" href="?color=orange">Orange</a></li>
	                         <li role="presentation"><a role="menuitem" tabindex="-1" style="color: green" href="?color=green">Green</a></li>
	                          <li role="presentation"><a role="menuitem" tabindex="-1" style="color: teal" href="?color=teal">Teal</a></li>
	                           <li role="presentation"><a role="menuitem" tabindex="-1" style="color: purple" href="?color=purple">Purple</a></li>
	                 </ul>
	               </li>
<?php	
	function changeColor($inputColor) 
	{		
	        $_SESSION['color'] = $inputColor;
	    		//echo $_SESSION['color'];
	}
	if ($_GET['color']) 
	{
	   	changeColor($_GET['color']);
	}
	
	function changeSize($inputSize) 
	{		
	    	$_SESSION['size'] = $inputSize;
	    		//echo $_SESSION[''];
	}
	if ($_GET['size']) 
	{
	   	changeSize($_GET['size']);
	}
	
	function changeFace($inputFace) 
	{		
	    	$_SESSION['face'] = $inputFace;
	    		//echo $_SESSION[''];
	}
	if ($_GET['face']) 
	{
	   	changeFace($_GET['face']);
	}
	
	function changeSendto($inputSendto) 
	{		
	    	$_SESSION['sendto'] = $inputSendto;
	    		//echo $_SESSION[''];
	}
	if ($_GET['sendto']) 
	{
	   	changeSendto($_GET['sendto']);
	}


?>
               <a href="chatlog.txt" class="dropdown" style="margin-left:40px; margin-top:10px; display:inline-block">Download Chat History</a>
               <p class="help-block" style="margin-left:60px; margin-top:-30px; display:inline-block"><font size="2">Right Click to Save</font></p>
	               
         
	    </div>
	  </div>
	  </div>
	  
	  <div id="mediumPanel">
	  <div id="panel3" class="panel panel-primary text-align:left">
	  
	   <div id="smallestPanel">
		    <div class="panel-body">
				<div class="input-group input-group-lg">
				
			          
				<html>
				<body>
				  <form action="<?php $_PHP_SELF ?>" method="GET">
				          
					  <input type="text" size="8px" name = "textboxinput" style="height: 110px; width:600px; font-size:<?php echo ($_SESSION["size"]*6);?>px; color:<?php echo $_SESSION["color"];?>;" class="form-control" placeholder="Please Enter Here">
					  
					  <input type="submit" value = "Send" style="float: right; margin-right: 0px; margin-top: 15px" class="btn btn-default"/>

					  <div class="btn-group">
						  <button type="button" class="btn btn-default" style="float: left; margin-left: 0px; margin-top: 15px">Send To: </button>
						  
						  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="float: left; margin-top: 15px">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						    <li><a href="?sendto=Everyone"onclick=myFunction('Everyone')>Everyone</a></li>
						    <li class="divider"></li>
						    <li><a href="?sendto=Jack"onclick=myFunction('Jack')>Jack</a></li>
						    <li><a href="?sendto=Dick"onclick=myFunction('Dick')>Dick</a></li>
						    <li><a href="?sendto=William"onclick=myFunction('William')>William</a></li>
						  </ul>
						  
						  <a href="#" class="dropdown" style="margin-left:15px; margin-top:20px; font-size: 18px; display:inline-block"><?php echo ($_SESSION["sendto"]);?></a>
																			
						  </button>
						 
						  
						
				          </div>
					  
					  
				  </form>
				</body>
				</html>
				

									  
				</div>
				
		    </div>
	   </div>
	    	                  	    	                  
	    	                  				  
	  </div>
	</div>
	</div> 
	
	<div id="smallPanel">
	<div class="col-sm-2">
	  <div id="panel1" class="panel panel-primary text-align:left">
	    <div class="panel-heading">
	      <h3 class="panel-title">Currently Online</h3>
	    </div>
	    <div class="panel-body">
	    <div id='sb3'>
	    		
	    		<div class="thumbnail">
			      <div class="caption">
			        
			        <img src="profile1.jpg"  width="80" height="80" alt="some_text">
			        <h4>Yifang Zhang</h4>
			        <span class="label label-success">Group Leader</span>
			      </div>
			    </div>
			    
			    <div class="thumbnail">
			      <div class="caption">
			        
			        <img src="profile2.jpg"  width="80" height="80" alt="some_text">
			        <h4>Vincent Sun</h4>
			        <span class="label label-info">Chatroom Manager</span>
			      </div>
			    </div>
			    
			    <div class="thumbnail">
			      <div class="caption">
			        
			        <img src="profile3.png"  width="80" height="80" alt="some_text">
			        <h4>Sida Li</h4>
			      </div>
			    </div>
			    
			    
	              
	    </div>
	    </div>
	  </div>
	 <script type="text/javascript">
          jQuery(document).ready(function($) {
 		$('#sb3').slimScroll({
		  height: '630px'
		 });
		 });
     	</script>
	</div>    
	</div>
        
        
        





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../../docs-assets/js/holder.js"></script>
  </body>
</html>