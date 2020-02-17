<!DOCTYPE html>
<html>
<head>
	<title>面试</title>
</head>
<body>
	<form method="post" action="{{url('do_add')}}" enctype="multipart/form-data">
					
	面试公司：<input type="text" name="company_name"></br>
	地址：<input type="text" name="address"></br>
	商品图片：<input type="file" name="pic"></br>			
	<input type="submit" value="提交">
	</form>
</body>
</html>