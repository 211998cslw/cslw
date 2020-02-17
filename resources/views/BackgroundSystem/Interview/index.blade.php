<table border="1">
	<tr>
		<td>id</td>
		<td>面试公司</td>
		<td>面试地点</td>
		<td>面试时间</td>
		<td>录音或者面试题</td>
	</tr>
	@foreach($res as $v)
	<tr>
		<td>{{$v->id}}</td>
		<td>{{$v->company_name}}</td>
		<td>{{$v->address}}</td>
		<td>{{date('Y-m-d H:i:d',$v->time)}}</td>
		<td>{{$v->pic}}</td>

	</tr>
	@endforeach
</table>