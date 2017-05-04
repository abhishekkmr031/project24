<!DOCTYPE html>
<html>
<head>
    <title>Head proctor</title>
    
    <link href="css/default.css" rel="stylesheet">
    <style type="text/css">
    #fid{
  box-shadow:0 0 3px 0;
}
#button1{
  height:10px;
  width:90px;
}
#displayArea{
	position: absolute;
	height: 40%;
	width: 100%;
	top: 20%;
	left: 0;
}

#profile{
	height: 50px;
	width: 50px;
	border-radius: 100%;
	background-color: red;
}

    </style>
    
</head>
<body>
<input id="fid" type="textbox"></input>
<input type="button" id="button1" value="search" onclick="display()"></input>
<div id="displayArea">
	<div id="profile"></div>
</div>
	

	<!-- javascript -->
    <script src="<?php echo base_url('/assets/js/jquery-2.1.1.min.js')?>"></script>  
    <script type="text/javascript">
    var profile;

    	function display(){
    	profile = document.getElementById('profile');
    	profile.innerHTML="H";
}

    </script>
    
</body>
</html>