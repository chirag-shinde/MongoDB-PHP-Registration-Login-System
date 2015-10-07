<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php
    
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<?php

   if(isset($_POST['reg'])){
       
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $temp  = $_POST['pass'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "First Name"    => $fname,
            "Last Name"     => $lname,
            "Email Address" => $email,
            "Password"      => $pass
        
        );
        
        $query = chkemail($email);
        if($query){
            register($arrays);
            header("Location: login.php");
            }
       else{
        echo "Email already registered!";
           echo"<br>";
        echo "Please <a href='register.php'>Register</a> with another email ID";
       }
}

?>