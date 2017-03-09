<html>
<head>
	<title>Student In Proctor</title>
	<style type="text/css">
		.container{

			height: 80%;
			width: 80%;
		}
	</style>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">      
	  <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css')?>">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>  
</head>
<body>
	 <table class = "highlight">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Usn</th>
          </tr>
        </thead>

        
         		
         		<?php
         			 foreach($studentInProctor as $key){ ?>

         			 <tbody>
          				<tr>
          					<td><a href = "<?php echo "http://localhost/ci/index.php/Welcome/loadGraphView/".$key->usn;?>"><?php echo $key->name;?></a></td>
	            			<td><?php echo $key->usn;?></td>
						</tr>
          
        			 </tbody>
	            			
	        	<?php } ?>
	        
      </table>

      	<!--JavaScript-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
        <script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>  
</body>
</html>