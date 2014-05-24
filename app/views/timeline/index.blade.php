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
<div class="row">
			<div class="col-md-6">
				<select>
					<option>Semua Ranting</option>
					<option>Soekarno</option>
					<option>Hatta</option>
					<option>Prabowo</option>
				</select>

				<select>
					<option>Tanggal Naik</option>
					<option>Tanggal Turun</option>				
				</select>
			</div>
			
			<div class="col-md-1 pull-right">
				Profile
			</div>
		</div> 

		<div class="row">
			<div class="col-md-2">
				<img src="{{asset('assets/img/rantingwaktu.png')}}" class="img-responsive">
			</div>
			
			
		</div> 
 
		<?php for ($i=1; $i < 20; $i++) : 			
			$classrow = ($i%2) ? 'rw-genap' : 'rw-ganjil' ;
		?>
			
		<div class='row <?php echo $classrow; ?>'>
			<div class='col-md-2'><?php echo $i; ?></div>
			<div class='col-md-8'>
				<div class='rw-title'>Sejarah harus diingat</div>
			</div>
			<div class='col-md-1'>
				<span class="badge">42</span>
			</div>
			<div class='col-md-1'>
				<svg height="22px" version="1.1" viewBox="0 0 22 22" width="22px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><defs><path d="M10.9849098,17.1363781 L4.18653734,21.9999998 L6.53637275,13.9875387 L0,8.56176179 L7.9498286,8.49334719 L10.9849102,0 L13.9360342,8.56176759 L22,8.56176759 L15.4334469,14.0403266 L17.7832826,22 L10.9849098,17.1363781 L10.9849098,17.1363781 Z M10.9849098,15.6249035 L5.68653735,19.9885252 L7.68786575,13.7526245 L2.5,9.55028719 L8.688354,9.47357179 L10.9849102,2.98852539 L13.2138052,9.55029299 L19.5,9.55029299 L14.2083731,13.7526245 L16.2832826,19.9885254 L10.9849098,15.6249035 L10.9849098,15.6249035 Z" id="path-1"/></defs><g fill="none" fill-rule="evenodd" id="miu" stroke="none" stroke-width="1"><g id="common_star_favorite_bookmark_outline_stroke"><use fill="#000000" fill-rule="evenodd" xlink:href="#path-1"/><use fill="none" xlink:href="#path-1"/></g></g></svg>
			</div>
		</div>
		
		<?php endfor; ?>
@stop

{{-- Custom Script --}}
@section('script')

@stop