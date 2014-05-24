<?php
class Topik extends Eloquent {
	
	protected $table		= 'topik';
	/* protected $filleable	= array(		
		'judul',
		'deskripsi'
	);	
	protected $guarded		= array(
		'id',
		'pembuat_id'
	);	 */
	protected $softDelete	= TRUE;	
	public $timestamps		= TRUE; 	
}