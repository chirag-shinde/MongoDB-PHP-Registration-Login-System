<?php
    session_start();
    function register($document){
        global $collection;
        $collection->insert($document);
        return true;
    }
    
    function chkemail($email){
        global $collection;
        $temp = $collection->findOne(array('Email Address'=> $email));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }
    function setsession($email){
     
       
        
        $_SESSION["userLoggedIn"] = 1;
        global $collection;
        $temp = $collection->findOne(array('Email Address'=> $email));
        $_SESSION["uname"] = $temp["First Name"];
        $_SESSION["email"] = $email;
        return true;
        
    }
    function chkLogin(){
        
        //var_dump($_SESSION);
        
        if($_SESSION["userLoggedIn"]== 1){
            return true;
        }
        else{
            return false;
        }
    }
    function removeall(){
        unset($_SESSION["userLoggedIn"]);
        unset($_SESSION["uname"]);
        unset($_SESSION["email"]);
        return true;
    }

?>