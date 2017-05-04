<html>
<head>
	<title>Proctor Dashboard</title>
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
        <li><a id="dashboard" class="z-depth-5" href="<?php echo base_url('index.php/Welcome/index'); ?>">Dashboard</a></li>
        <li><a id="personalInfo" href="<?php echo base_url('index.php/Welcome/index'); ?>">Personal Info</a></li>
        <li><a id=" students"href="<?php echo base_url('index.php/Welcome/studentInProctor'); ?>">Students</a></li>
      </ul>
    </div>
  </nav>

  <div class="center"><h4 class="header">Welcome, <br>Prof. C K Marigowda</h4></div>
                    <!-- parallax effect -->
  <div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url('/assets/images/image1').".jpg";?>"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url('/assets/images/image2').".jpg";?>"></div>
  </div>

   <footer class="page-footer">
          <div class="container">
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
    $(document).ready(function(){
      $('.parallax').parallax();
    $("#dashboard").css({opacity: 0.8})
    });
  </script>
        
</body>
</html>