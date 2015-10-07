<?php
    require_once 'library.php';
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <form class="form-horizontal" action="register_action.php" method="post">
          <div class="form-group">
            <label for="inputFname3" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputFname3" name="fname" placeholder="First Name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputLname3" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLname3" name="lname" placeholder="Last Name" required>
            </div>
          </div>    
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
            </div>
          </div>
           <div class="form-group">
            <label for="inputCpassword3" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="cpass" name="cpass" onblur="chk()" placeholder="Confirm Password" required>
            <div id="error"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" name="reg">Sign Up</button>
            </div>
          </div>
        </form>
        <script src="myscript.js" type="text/javascript"></script>
    </body>
</html>