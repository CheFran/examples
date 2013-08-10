<?php namespace KirkBushell\Data\Repositories;

use KirkBushell\Data\Models\Post;

class PostRepository {
	public function all() {
		return Post::all();
	}
}
