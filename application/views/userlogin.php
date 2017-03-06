<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">      
	  <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css')?>">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>        
</head>
<body>
  <?php echo base_url('/assets/css/materialize.min.css');?>
  <div class = " container blue-text text-darken-2 center"> <h3> Faculty Registration Form </h3> </div>

	<div class="row">
    <form class="col s12" action = "<?php echo site_url('/Welcome/confirmation') ?>" >

      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>

        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>

      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="assigned_password" type="text" class="validate">
          <label for="assigned_password">Assign Password</label>
        </div>
      </div>
      
      <div class = "center">
        <input type = "submit" value = "submit" >
      </div>
    </form>
  </div>

          

</body>
</html>
