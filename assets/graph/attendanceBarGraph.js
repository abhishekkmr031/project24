		var usn = "<?php echo $usn?>" ;
		console.log(usn);

		var methodUrl = "http://localhost/ci/index.php/Welcome/attendance/";

		var dataUrl = methodUrl.concat(usn);

		$(document).ready(function() {

	/**
	url : "http://localhost/ci/index.php/Welcome/retrieve_data"
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : dataUrl,
		type : "GET",
		success : function(data){
			console.log(data);
			console.log("inside successfunction");

			var score = {
				TeamA : []
			};

			var len = data.length;
			
			

			for (var i = 0; i < len; i++) {
				
					score.TeamA.push(data[i].sub1);
					score.TeamA.push(data[i].sub2);

					score.TeamA.push(data[i].sub3);

					
				

			}
			console.log(score.TeamA);

				
			//get canvas
			var ctx = $("#bar-chart");

			var data = {
				labels : ["sub1", "sub2", "sub3",],
				datasets : [
					{
						label : "StudentA score",
						data : score.TeamA,
						backgroundColor : [
												"rgba(10, 20, 30, 0.3)",
												"rgba(100, 200, 300, 0.3)",
												"rgba(110, 250, 350, 0.3)",
											],
						borderColor : [
												"rgba(10, 20, 30, 1)",
												"rgba(100, 200, 300, 1)",
												"rgba(110, 250, 350, 1)",
											],
						borderWidth : 1,
					}
					
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Line Graph",
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

			console.log("Nice it seem's to be Working !!! :)");

		},
		error : function(data) {
			console.log(data);
			console.log("error function");
		}
	});

});

	
