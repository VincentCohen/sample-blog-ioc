<?php namespace Blog\Comment\Controller;

use Blog\Comment\CommentRepositoryInterface;

class CommentController {

    protected $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function view($commentId)
    {
        return $this->commentRepository->findById($commentId);
    }
}