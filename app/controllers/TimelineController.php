<?php
class TimelineController extends BaseController {
	
	public function getIndex() {
		return View::make('timeline.topics');
	}
	
	// Memperlihatkan halaman depan banget
	// daftar topik
	public function getTopic($a) {
		
	}
	
	// Memperlihatkan halaman 
	
	public function getSingle($post) {
		
	}
	
	public function getBranch($branch = NULL) {
		
	}
	
	public function getSejarah($topic) {
		return View::make('timeline.sejarah');
	}
}