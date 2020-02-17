<!DOCTYPE html>
<html>
<head>
	<title>后台添加前台用户</title>
</head>
<body>
	<form action="{{url('do_adminadd')}}" method="post">
    用户名：<input type="text" name="name" id=""><br>
    密码：<input type="password" name="password" id=""><br>
    <input type="submit" value="添加">
</form>
</body>
</html>