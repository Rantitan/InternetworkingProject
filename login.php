<?PHP


include('connect.php');//链接数据库
$name = $_POST['name'];//post获得用户名表单值
$passowrd = $_POST['password'];//post获得用户密码单值

if ($name && $passowrd){//如果用户名和密码都不为空
    $sql = "select * from user where username = '$name' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
    $result = mysqli_query($con,$sql);//执行sql
    $rows=mysqli_num_rows($result);//返回一个数值
    if($rows){//0 false 1 true
        header("refresh:0;url=logged.html");//如果成功跳转至logged.html页面
        exit;
    }else{
        echo "Invalid username or password";
        echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
    }

}else{//如果用户名或密码有空
    echo "Incomplete Input";
    echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";
    //如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
}

mysql_close();//关闭数据库
?>
————————————————

