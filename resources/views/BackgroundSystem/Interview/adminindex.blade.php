<table border="1">
	<tr>
        <td>id</td>
        <td>用户名</td>
        <td>密码</td>
    </tr>
    @foreach($res as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->password}}</td>
        </tr>
    @endforeach
</table>