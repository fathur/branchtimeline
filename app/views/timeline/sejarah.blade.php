@extends('layouts.front')

{{-- Titlebar--}}
@section('title')
Ranting Waktu
@stop

{{-- Custom Style --}}
@section('style')

@stop

{{-- Content --}}
@section('content')

@for($i=1;$i<=100;$i++)
<div class='row {{ ($i%2) ? "rw-genap" : "rw-ganjil" }}'>
	<div class='col-xs-2'>{{{$i}}}</div>
	<div class='col-xs-8'>
		<div class='rw-title'>Sejarah harus diingat Sejarah harus diingat Sejarah harus diingat Sejarah harus diingat Sejarah harus diingat Sejarah harus diingat Sejarah harus diingat</div>
	</div>
	<div class='col-xs-1'>
		<span class="badge">42</span>
	</div>
	<div class='col-xs-1'>
	</div>
</div>
@endfor

@stop

{{-- Custom Script --}}
@section('script')
<script>
$('.rw-title').click(function() {
	$(this).height(100);
});
</script>
@stop