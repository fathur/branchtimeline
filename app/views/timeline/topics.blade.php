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
<div class="row sr-only">
	<div class="col-md-2">
		<img src="{{asset('assets/img/rantingwaktu.png')}}" class="img-responsive" />
	</div>
</div>

<div class="row">
	@for($i=1;$i<=10;$i++)
	<div class="col-xs-6 rw-topic">
		<a href="/sejarah/s">
			<img src="{{asset('assets/img/Desert.jpg')}}" class="img-responsive" />
		</a>
	</div>
	@endfor
</div>
@stop

{{-- Custom Script --}}
@section('script')

@stop