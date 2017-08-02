@extends('layouts.master')
@section('isi')
<div class="row">
<center><h1>Data sikap</h1></center>
<div class="panel panel-primary">
<div class="panel-heading">Data sikap
<div class="panel-title-pull-right">
	<a href="{{ URL::previous()}}">kembali</a></div>
</div>

<div class="panel-body">
	<form action="{{route('author.update',$author->id)}}" method="post">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
		<label class="control-lable">nama</label>
		<input type="text" name="nama" class="form-control" required="">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-succes">Simpan
			</button>
			<button type="reset" class="btn btn-danger">Reset
			</button>
		</div>
		</form>
		</div>
		</div>
</div>
@endsection