<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <style>
.cent {
    margin: auto;
    width: 50%;
    margin-left: 450px;
    padding: 10px;
}
</style>
      
    </head>

    <body>


      
<div class = "cent" >
        <fieldset style = "width:50%; border-style:solid; border-color:black; border-width:5px;">
          <legend><h3>Login</h3></legend>

          <div class = "tab">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s4"><a href="#test-swipe-1">Farmer login</a></li>
                <li class="tab col s4"><a href="#test-swipe-2">Supplier login</a></li>
                <li class="tab col s4"><a href="#test-swipe-3">Admin login</a></li>
            </ul>
          </div>
        <br><br><hr>

        <div id="test-swipe-1" class="card-panel purple lighten-5">
          

           <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="user_name" type="text" class="validate">
          <label for="user_name"align = "left">user Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="material-icons right">send</i>
  </button>

  <button class="btn waves-effect waves-light" type="reset" name="action">Reset
    <i class="material-icons right">send</i>
  </button>
  <a href="<php echo base_url('/index.php/Welcome/loginForm')?>">
    Create account
  </a>
<br>
  <a href="<php echo base_url('/index.php/Welcome/loginForm')?>">
    Forget password?
  </a>
      </form>
  </div>


        </div>


        <div id="test-swipe-2" class="card-panel red lighten-5">
          <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="user_name" type="text" class="validate">
          <label for="user_name">user Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="material-icons right">send</i>
  </button>

  <button class="btn waves-effect waves-light" type="reset" name="action">Reset
    <i class="material-icons right">send</i>
  </button>
  <a href="<php echo base_url('/index.php/Welcome/loginForm')?>">
    Create account
  </a>
<br>
  <a href="<php echo base_url('/index.php/Welcome/loginForm')?>">
    Forget password?
  </a>
      </form>
  </div>
</div>


        <div id="test-swipe-3" class="card-panel green lighten-5">

           <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="user_name" type="text" class="validate">
          <label for="user_name">user Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="material-icons right">send</i>
  </button>

  <button class="btn waves-effect waves-light" type="reset" name="action">Reset
    <i class="material-icons right">send</i>
  </button>
  <a href="<php echo base_url('/index.php/Welcome/loginForm')?>">
    Create account
  </a>
<br>
  <a href="<php echo base_url('/index.php/Welcome/loginForm')?>">
    Forget password?
  </a>
      </form>
  </div>

        </div>



        </fieldset>
        </div>





      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    </body>
  </html>