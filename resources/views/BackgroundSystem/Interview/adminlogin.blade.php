<!DOCTYPE html>
<html>
<head>
    <title>后台登录</title>
</head>
<body>
    <form action="{{url('do_adminlogin')}}" method="post">
        用户名：<input type="name" name="username"></br>
        密码：<input type="password" name="password"></br>
        <input type="submit" value="登录">
    </form>

</body>
</html>