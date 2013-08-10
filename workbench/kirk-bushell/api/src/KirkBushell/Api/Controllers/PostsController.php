<?php

class PostsController {

	private $repository;

	public function __construct( PostsRepository $repository ) {
		$this->repository = $repository;
	}

	public function getIndex() {
		return $this->repository->all();
	}
}