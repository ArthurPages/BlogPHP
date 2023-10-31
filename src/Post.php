<?php

namespace blog;

class Post {
    protected $title;
    protected $category;
    protected $content;

    public function add_title(String $title){
        $this->title = $title;
    }

    public function set_category (Category $category){
        $this->category = $category;
    }

    public function add_content(String $content){
        $this->content = $content;
    }

    public function get_posts(){
        return "
        <strong>Titulo: </strong> $this->title<br>
        <strong>Contenido: </strong> $this->content<br>
        <strong>Categoría: </strong> {$this->category->get_name()}
        ";
    }
}



?>