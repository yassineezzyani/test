<?php
 $host = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "gest_client";
$a= new mysqli($host,$dbusername,"",$dbname);

if($a -> connect_error){
    die("pb connetion".$a -> connect_error);
   
}else {
    echo "sucessful ....";
      
    echo "<br>";
    echo $_POST['login'];
    echo "<br>";
    echo $_POST['password'];
}