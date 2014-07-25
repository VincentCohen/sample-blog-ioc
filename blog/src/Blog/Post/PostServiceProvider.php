<?php namespace Blog\Post;

use Illuminate\Support\ServiceProvider;
use Blog\Post\Entity\EloquentPostRepository;
use Blog\Post\Entity\Post;

class PostServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('Blog\Post\Entity\Post', function() {
            return new Post;
        });

        $this->app->bind('Blog\Post\PostRepositoryInterface', function($app) {
           return new EloquentPostRepository(
               $app->make('Blog\Post\Entity\Post')
           );
        });
    }
}