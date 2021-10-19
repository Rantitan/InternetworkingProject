<?php
$server="localhost";//localhost, Or 127.0.0.1
$db_username="root";//username to connect to phpadmin
$db_password="";//password

$con = mysqli_connect($server,$db_username,$db_password);//connect to database
if(!$con){
    die("can't connect".mysqli_error());//if any errors occurs, it will display cannot connect
}

mysqli_select_db($con,'test');//choose database
?>
