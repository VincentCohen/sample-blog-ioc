<?php namespace Blog\Post\Entity;

use Blog\Post\PostRepositoryInterface;

class EloquentPostRepository implements PostRepositoryInterface {

    protected $post;

    public function __construct(Post $post)
    {
        return $this->post = $post;
    }

    public function findById($postId)
    {
        return $this->post->where('id', '=', $postId)->first();
    }
}