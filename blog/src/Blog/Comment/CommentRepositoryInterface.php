<?php namespace Blog\Comment;

interface CommentRepositoryInterface {

    public function findById($commentId);
}