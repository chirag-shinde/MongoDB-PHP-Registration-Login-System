<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php
    
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<?php

    if(isset($_POST['login'])){
//        print_r($_POST);
      
        
        $email = $_POST['email'];
        $upass = $_POST['pass'];
        $criteria = array("Email Address"=> $email);
        $query = $collection->findOne($criteria);
        //var_dump($query);
        if(empty($query)){
            echo "Email ID is not registered.";
            echo "Either <a href='register'>Register</a> with the new Email ID or <a href='login.php'>Login</a> with an already registered ID";
        }
        else{
            
                $pass = $query["Password"];
                if(password_verify($upass,$pass)){
                    $var = setsession($email);
//                    echo"<pre>";   
//                    print_r($_SESSION);
                  
                    
                    if($var){
                        
                    header("Location: home.php");
                    }
                    else{
                        echo "Some error";
                    }
                }
                else{
                    echo "You have entered a wrong password";
                    echo "<br>";
                    echo "Either <a href='register'>Register</a> with the new Email ID or <a href='login.php'>Login</a> with an already registered ID";
                }
                
            
        
        }
    }
    

?>