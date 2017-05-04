$(document).ready(function() {

	/**
	url : "http://localhost/ci/index.php/Welcome/retrieve_data"
	 * call the data.php file to fetch the result from db table.
	 */
	/*
	$.ajax({
		url : "http://localhost/ci/index.php/Welcome/retrieve_data",
		type : "GET",
		success : function(data){
			console.log(data);

			var score = {
				TeamA : [],
				TeamB : []
			};

			var len = data.length;

			

			for (var i = 0; i < len; i++) {
				if (data[i].team == "TeamA") {
					score.TeamA.push(data[i].score);
					
				}
				else if (data[i].team == "TeamB") {
					score.TeamB.push(data[i].score);
				}
			}
			*/

				
			//get canvas
			var ctx = $("#line-chart");

			var data = {
				labels : ["sub1", "sub2", "sub3", "sub4", "sub5"],
				datasets : [
					{
						label : "Internal I score",
						data : [40, 50, 60, 70, 80],
						backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Internal II score",
						data : [50, 40, 90, 80, 50],
						backgroundColor : "green",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "Internal III score",
						data : [35, 65, 95, 88, 45],
						backgroundColor : "blue",
						borderColor : "blue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
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
				}
				/* ,scales : {
					yAxes : [{
						ticks : {
							min : 0
						}
					}]
				} */
			};

			var chart = new Chart( ctx, {
				type : "line",
				data : data,
				options : options
			} );

			console.log("Nice it seem's to be Working !!! :)");


/* 

		},
		error : function(data) {
			console.log(data);
		}
	});  */
}); 