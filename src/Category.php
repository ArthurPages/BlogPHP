<?php

namespace blog;

class Category{
    protected $name;

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }
}


?>