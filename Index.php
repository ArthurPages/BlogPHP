<?php

include __DIR__ . "/vendor/autoload.php";


//use blog\User;
use blog\Author;
use blog\Category;
use blog\Post;


//Categoria para los post relacionados a php
$php_category = new Category();
$php_category->set_name("PHP");

//Categoria para los posts relacionados a Java
$java_category = new Category();
$java_category->set_name("Java uwu");

//Categoria de Vue JS
$vue_category = new Category();
$vue_category->set_name("Vue JS");

//Uso para la clase de Author
$ArtroxxGaming = new Author();
$ArtroxxGaming->set_name("Arthur", "López");

//Creacion estática de un post desde codigo

$functions_php = new Post();
$functions_php->add_title("Post para hablar de las funciones de php");
$functions_php->set_category($php_category);
$functions_php->add_content("En este post estatico hablaremos un poco sobre las funciones de php");

$vue_app_post = new Post();
$vue_app_post->add_title("Post para hablar de las funciones de creacion de app con Vue");
$vue_app_post->set_category($vue_category);
$vue_app_post->add_content("En este post estatico hablaremos un poco sobre las funciones de vue para el desarrollo de apps");

//Asignacion de los posts creados al autor

$ArtroxxGaming->create_post($functions_php);
$ArtroxxGaming->create_post($vue_app_post);

//lista de post del usuario 

$author_post = $ArtroxxGaming->get_posts();

foreach ($author_post as $post) {
    echo "El usuario de nombre {$ArtroxxGaming->get_full_name()} escribió el siguiente post: <br><br>";
    echo $post->get_posts();
    echo "<br><br><br>";
}

?>
