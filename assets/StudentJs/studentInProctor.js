$(document).ready(function() {

	/**
	url : "http://localhost/ci/index.php/Welcome/retrieve_data"
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/ci/index.php/Welcome/studentInProctor",
		type : "GET",
		success : function(data){
			console.log(data);

			var student = {				// var score
				name : [], //TeamA : [],
				usn : []  //	TeamB : []
			};

			var len = data.length;

			

			for (var i = 0; i < len; i++) {
		
					document.write("<br>");
					document.write(data[i].name);
					document.write("    ");
					document.write(data[i].usn);			
			
				
			}

				
			

			console.log("Nice it seem's to be Working !!! :)");

		},
		error : function(data) {
			console.log(data);
		}
	});

});