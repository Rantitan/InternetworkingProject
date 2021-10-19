<?PHP


include('connect.php');//connect to database
$name = $_POST['name'];//post to get form
$passowrd = $_POST['password'];//post: get the password

if ($name && $passowrd){//username and password can not be empty
    $sql = "select * from user where username = '$name' and password='$passowrd'";//check the corresponding sql to username and password in database
    $result = mysqli_query($con,$sql);//execute sql
    $rows=mysqli_num_rows($result);//return a value
    if($rows){//0 false 1 true
        header("refresh:0;url=logged.html");//if login successful it will jump to logged.html
        exit;
    }else{
        echo "Invalid username or password";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1500);
                    </script>
                ";//it will jump to an error and return to login.html automatically.
    }

}else{//if username and passwword are empty
    echo "Incomplete Input";
    echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1500);
                      </script>";
    //it will jump to an error and return to login.html automatically.
}

mysql_close();//close mysql
?>


