<?php
class Artikel extends Eloquent {
	protected $table		= 'artikel';
	protected $filleable	= array(
		'judul',
		'isi'
	);
	protected $guarded		= array(
		'id',
	);
	protected $softDelete	= TRUE;
	public $timestamps		= TRUE;
}