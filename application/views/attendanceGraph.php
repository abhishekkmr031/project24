<html>
<head>
	<title>Student sec</title>
	<style type="text/css">
		.personalInformation{
			position: absolute;
		}
		.container {
			margin-top: 200px;
		}
		/*button{
			position: absolute;
			top: 25%;
			font-size: 18px;
			height: 40px;
			width: 25%;
			background-color: hsl(180, 100%, 50%);
		}*/
		.area{
			position: absolute;
			top: 40%;
			height: 80%;
			width: 100%;
			background-color: hsl(180, 100%, 50%);
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">      
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css')?>">
	<!--  -->
</head>
<body>

	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url('index.php/Welcome/index'); ?>">Dashboard</a></li>
        <li><a href="<?php echo base_url('index.php/Welcome/index'); ?>">Personal Info</a></li>
        <li><a href="<?php echo base_url('index.php/Welcome/studentInProctor'); ?>">Students</a></li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin-top:50px;">
  		<div class="row">
  			<div class="col s4">
  				<button type="button" id="pi">Personal Information</button>
  			</div>
  			<div class="col s4">
  				<button type="button" id="ai">Academic Information</button>
  			</div>
  			<div class="col s4">
  				<button type="button" id="ccaBtn">Co-Curricular Activities</button>
  			</div>
  		</div>
  		<div  class="row">
  			<div class="col s12" id="personalInfo">
  			</div>
  		</div>

  		<div class="row" id="academicInfo" >
  			<div class="container">
				 <div class="row">
				  <div class="col m6">
				  	<div style="height:250px; width:250px;">
					  <canvas  id="attendance" ></canvas>
					</div>
				  </div>
				  <div class="col m6">
				    <div style="height:300px; width:250px;">
					  <canvas  id="marks" height="300px"></canvas>
				    </div>
				  </div>
			     </div>
		    </div>
        </div>
  		<div id="cca" class="row">
  			this is cca
  		</div>
  </div>



<div class="container">



</div>





	<?php
		$var = $usn;	
	?>

	<!-- javascript -->
	<script src = "<?php echo base_url('/assets/graph/Chart.min.js') ?>"></script>
	<script src = "<?php echo base_url('/assets/graph/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>    

	<!--
	<script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>    
	<script src = "<?php // echo base_url('/assets/graph/attendanceBarGraph.js') ?>"></script>
	-->

	<script type="text/javascript">


		$(document).ready(function() {

			$("#personalInfo").css("display", "none");
			$("#academicInfo").css("display", "none");
			$("#cca").css("display", "none");
		});

		$("#pi").on("click", function() {

			$("#personalInfo").css("display", "block");
			$("#academicInfo").css("display", "none");
			$("#cca").css("display", "none");
		});

		$("#ai").on("click", function() {

			$("#personalInfo").css("display", "none");
			$("#academicInfo").css("display", "block");
			$("#cca").css("display", "none");
		});

		$("#ccaBtn").on("click", function() {

			$("#personalInfo").css("display", "none");
			$("#academicInfo").css("display", "none");
			$("#cca").css("display", "block");
		});



		var usn = "<?php echo $usn?>" ;
		//console.log(usn);

		var methodUrl = "http://localhost/ci/index.php/Welcome/attendance/";
		var attendanceMethodUrl = methodUrl.concat(usn);

		var methodUrl2 = "http://localhost/ci/index.php/Welcome/returnMarks/";
		var marksMethodUrl = methodUrl2.concat(usn);

		var personalInformationMethod = "http://localhost/ci/index.php/Welcome/retrievePersonalInformation/";
		var personalInformationUrl = personalInformationMethod.concat(usn);

	$(document).ready(function() {

	/**
	url : "http://localhost/ci/index.php/Welcome/retrieve_data"
	 * call the data.php file to fetch the result from db table.
	 */
	 //$('#area').empty();
	 $("#area").css("display", "block");
	 $("#attendance").css("display", "none");
	 $("#marks").css("display", "none");
	 console.log(usn);
	 console.log("   ");

	 $.ajax({
	 	url : personalInformationUrl,
	 	type : "GET",
	 	success : function (data) {
	 		//$("#personalInfo").html(data);
	 		console.log("fetching student personal Information");
	 		console.log(data);

	 		var Sname, Susn, Sfathername;

	 		var len = data.length;
			
			

			if(len == 1){

						for (var i = 0; i < len; i++) {
						
							Sname = data[i].name;
							Susn = data[i].usn;
							Sfathername = data[i].fathername;
					}
					console.log(Sname);
					console.log(Susn);
					console.log();
					var student = document.createElement('span');
						student.id = "student";
						student.innerText ="\n Student name :"+ Sname + 
										"\n Student usn :"+ Susn + 
										"\n Student Father name :"+ Sfathername;
						$("#personalInfo").append(student);
					
			}
			else 
			{
				console.log("no data found");
			}

	 	},
	 	error : function(data) {
			console.log("Error in data parsing for personalInformation");
			//console.log(data);
			//console.log("error function");
		}

	 });
	});


$("#ai").click(function() {

//$('#area').empty();
$("#area").css("display", "none");
$("#attendance").css("display", "block");
$("#marks").css("display", "block");
	$.ajax({
		url : attendanceMethodUrl,
		type : "GET",
		success : function(data){
			console.log(data);
			//console.log("inside successfunction");

			var score = {
				TeamA : []
			};

			var len = data.length;
			
			

			for (var i = 0; i < len; i++) {
				
					score.TeamA.push(data[i].sub1);
					score.TeamA.push(data[i].sub2);
					score.TeamA.push(data[i].sub3);
			}
				//console.log(score.TeamA);
			// creating canvas
		/*	var canv = document.createElement('canvas');
			canv.id = "attendance";
			canv.height = "200px";
			canv.width = "200px";
			document.getElementById('area').appendChild(canv);
			*/
			
				
			//get canvas
			var ctx = $("#attendance");
			ctx.height = "200px";
			ctx.width = "200px";

			var data = {
				labels : ["sub1", "sub2", "sub3",],
				datasets : [
					{
						label : "Student Attendance Score",
						data : score.TeamA,
						backgroundColor : [
												"#FF6384",
									            "#4BC0C0",
									            "#FFCE56"
											],
						borderColor : [
												"#FF6384",
									            "#4BC0C0",
									            "#FFCE56"
											],
						borderWidth : 1,
					}
					
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Attendance Graph",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				},
				scales : {
					yAxes : [{
						ticks : {
							min : 0
						}
					}]
				}
			};

			var chart = new Chart( ctx, {
				type : "polarArea",
				data : data,
				options : options
			} );

			console.log("Nice,it seem's to be Working  for attendance graph!!! :)");
			console.log();

		},
		error : function(data) {
			console.log("Error in data parsing");
			console.log();
			//console.log(data);
			//console.log("error function");
		}
	});



$.ajax({
		url : marksMethodUrl,
		type : "GET",
		success : function(data){
			console.log(data);
			console.log("inside successfunction 2");

			var score = {
				TeamA : []
			};

			var len = data.length;
			
			

			for (var i = 0; i < len; i++) {
				
					score.TeamA.push(data[i].sub1);
					score.TeamA.push(data[i].sub2);
					score.TeamA.push(data[i].sub3);
			}
				//console.log(score.TeamA);

		/*	var canv2 = document.createElement('canvas');
			canv2.id = "marks";
			canv2.style.position = "absolute";
			canv2.style.height = "50%";
			canv2.style.width = "50%";
			document.getElementById('area').appendChild(canv2); */
			//get canvas
			var ctx = $("#marks");

			var data = {
				labels : ["sub1", "sub2", "sub3",],
				datasets : [
					{
						label : "Student marks Score",
						data : score.TeamA,
						backgroundColor : [
												"rgba(10, 20, 30, 0.3)",
												'rgba(153, 102, 255, 0.2)',
                								'rgba(255, 159, 64, 0.2)'
											],
						borderColor : [
												"rgba(10, 20, 30, 1)",
												'rgba(153, 102, 255, 0.2)',
                								'rgba(255, 159, 64, 0.2)'
											],
						borderWidth : 1,
					}
					
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Marks Graph",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				},
				scales : {
					yAxes : [{
						ticks : {
							min : 0
						}
					}]
				}
			};

			var chart = new Chart( ctx, {
				type : "bar",
				data : data,
				options : options
			} );

			console.log("Nice,it seem's to be Working for marks graph!!! :)");
			console.log();

		},
		error : function(data) {
			console.log("Error in data parsing");
			console.log();			//console.log("error function");
		}
	});

});


	</script>

</body>
</html>