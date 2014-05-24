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
		<img src="{{asset('assets/img/Desert.jpg')}}" class="img-responsive" />
	</div>
</div>

<div class="row">
	@foreach($topics as $topic)
	<div class="col-xs-6 rw-topic">
		<p>{{{$topic->judul}}}</p>
		{{link_to('sejarah/'.$topic->slug)}}
	</div>
	@endforeach
</div>
@stop

{{-- Custom Script --}}
@section('script')

@stop