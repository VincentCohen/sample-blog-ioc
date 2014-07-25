<?php namespace Blog\Post\Controller;

use Blog\Post\PostRepositoryInterface;

class PostController {

    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function view($postId)
    {
        return $this->postRepository->findById($postId);
    }
}