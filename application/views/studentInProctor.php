<html>
<head>
	<title>Student In Proctor</title>
	<style type="text/css">
	</style>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">      
	  <link rel="stylesheet" href="<?php echo base_url('/assets/css/materialize.min.css')?>">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>  
</head>
<body>


  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url('index.php/Welcome/index'); ?>">Dashboard</a></li>
        <li><a href="<?php echo base_url('index.php/Welcome/index'); ?>">Personal Info</a></li>
        <li><a class="z-depth-5" href="<?php echo base_url('index.php/Welcome/studentInProctor'); ?>">Students</a></li>
      </ul>
    </div>
  </nav>
        

	 <div class="container">
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
   </div>

       <footer class="page-footer">
          <div class="container ">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

<script type="text/javascript">
  $(document).ready(function() {
    $("#dashboard").css({opacity: 0.8})
  });
</script>

      	<!--JavaScript-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
        <script src="<?php echo base_url('/assets/js/materialize.min.js')?>"></script>  
</body>
</html>