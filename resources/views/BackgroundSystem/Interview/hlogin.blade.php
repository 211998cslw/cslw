<!DOCTYPE html>
<html>
<head>
	<title>前台登录</title>
</head>
<body>
	<form action="{{url('do_hlogin')}}" method="post">
    用户名：<input type="text" name="username"></br>
    密码：<input type="password" name="password"><br>
    <input type="submit" value="登录">
</form>
</body>
</html>