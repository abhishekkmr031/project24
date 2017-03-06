<html>
<body>

	<form method="post" action = "<?php echo base_url('index.php/welcome/addfacultyDb')?>">

		<input placeholder="Placeholder" name="first_name" type="text" class="validate" value = "<?php echo set_value('first_name');?>">
          <label for="first_name">First Name</label>

          <input placeholder="Placeholder" name="last_name" type="text" class="validate" value = "<?php echo set_value('first_name');?>">
          <label for="last_name">Last Name</label>

          <input placeholder="Placeholder" name="email" type="text" class="validate" value = "<?php echo set_value('first_name');?>">
          <label for="email">Email</label>

          <input placeholder="Placeholder" name="assigned_password" type="text" class="validate" value = "<?php echo set_value('first_name');?>">
          <label for="assigned_password">Assign Password</label>

          <input type = "submit" value = "submit" >
	</form>

</body>

</html>