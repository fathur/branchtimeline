<?php
class TimelineController extends BaseController {
	
	public function getIndex() {
		$topics = Topik::all();
		return View::make('timeline.topics')
			->with('topics', $topics);
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
		//return View::make('timeline.sejarah');
		$a = Topik::all();
		
		//dd($a);
		foreach ($a as $b) {
			dd($b->id);
		}
	}
}