<?php namespace Blog\Comment\Entity;

use Blog\Comment\CommentRepositoryInterface;

class EloquentCommentRepository implements CommentRepositoryInterface {

    protected $comment;

    public function __construct(Comment $comment)
    {
        return $this->comment = $comment;
    }

    public function findById($commentId)
    {
        return $this->comment->where('id', '=', $commentId)->first();
    }
}