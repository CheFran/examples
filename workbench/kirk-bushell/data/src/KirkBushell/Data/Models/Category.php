<?php namespace KirkBushell\Data\Models;

class Category extends \Eloquent {
	public function posts() {
		return $this->hasMany( '\KirkBushell\Data\Post' );
	}
}
