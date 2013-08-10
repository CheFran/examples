<?php namespace KirkBushell\Data\Models;

class Post extends \Eloquent {
	public function category() {
		return $this->belongsTo( '\KirkBushell\Data\Category' );
	}
}
