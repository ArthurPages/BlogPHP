<?php

namespace blog;

class Author extends User {
    protected $created_posts;
    protected $posts = [];

    public function create_post(Post $post){
        $this->posts[] = $post;
    }

    public function get_posts() : array {
        return $this->posts;
    }
}
 


