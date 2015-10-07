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
        <div class="container">
            <form class="form-horizontal" method="post" action="login_action.php">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" name="pass" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-default">Sign in</button>
            </form>
        </div>
    </body>
</html>