<?php
    try{
    $m = new MongoClient();
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->loginreg;
    //echo "Databse loginreg selected";
    $collection = $db->userdata; 
    //echo "Collection userdata Selected Successfully";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
       session_start();
?>