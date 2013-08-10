<?php namespace KirkBushell\Data\Repositories;

use KirkBushell\Data\Models\Category;

class CategoryRepository {
	public function all() {
		return Category::with( 'posts' )->get();
	}
}
