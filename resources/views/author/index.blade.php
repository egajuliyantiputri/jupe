@extends('layouts.master')
@section('isi')
<div class="row">
<center><h1>Data sikap</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data sikap
<div class="panel-title pull-right"><a href="/orangtua/create">Tambah Data</a></div>
</div>
<div class="panel-body">
<table class="table">
<thead>
<tr>
	<th>nama</th>
	<th colspan="2">Action</th>
	</tr>
</thead>
<tbody>
@foreach($sikap as $data)
	<tr>
		<td>{{$data->nama}}</td>
		</td>
		<td>
		</td>
		<td>
		<a class="btn btn-warning" href="/author/{{$data->id}}/
		edit">Edit</a></td> |
		<td>
		<form action="{{route('author.destroy',$data->id)}}" 
		method="post">
			<input name="_method" type="hidden" value="DELETE">
			<input name="_token" type="hidden">
			<input class="btn btn-danger" type="submit" value="
			DELETE">
			{{csrf_field()}}
		</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
</div> 

@endsection