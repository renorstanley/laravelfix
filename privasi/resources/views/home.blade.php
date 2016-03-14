@extends('template/t_index')
@section('content')



<div class="container">
<p></p>
<div class="panel panel-default">
	<div class="panel-heading">
Tambah Data</div>
	<div class="panel body">
		<!-- {!! Form::open(['url' => '/prosestambah']) !!} -->
		<form method = 'POST' action ='{{url("/prosestambah")}}'  >

			<input type='hidden' name='_token' value='<?php echo csrf_token();?>'>

		Nama: 
		{!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
		Alamat: 
		{!! Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control']) !!}
		Kelas:
		{!! Form::text('kelas', '', ['placeholder' => 'Kelas', 'class' => 'form-control']) !!}
		<p></p>
		{!! Form::submit('Tambah Data', ['class' => 'btn btn-danger']) !!}
		{!! Form::close() !!}
		@stop
	</div>
</div>
</div>
