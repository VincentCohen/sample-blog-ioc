<?php namespace Blog\Post;

interface PostRepositoryInterface {

    public function findById($postId);
}