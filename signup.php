<?php
header("Content-Type: text/html; charset=utf8");

if(!isset($_POST['submit'])){
    exit("Wrong Executive");
}//check the execitove of submit

$name=$_POST['name'];//post: to get the name
$password=$_POST['password'];//post: to get the password

include('connect.php');//connect to database
$q="insert into user(username,password) values ('$name','$password')";//insert value to sql
$reslut=mysqli_query($con,$q);//execute sql

if (!$reslut){
    die('Error: ' . mysqli_error());//failed executation
}else{
    echo "Register Successful";//register successful
    echo "<script>
                            setTimeout(function(){window.location.href='login.html';},1500);
                    </script>";
}

mysqli_close($con);//clese database

?>

