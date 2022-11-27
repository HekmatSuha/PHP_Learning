<?php


class Post
{
    public $title;

    public $published;


    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false)
];

// foreach ($posts as $post) {
//     $post->published = true;
// }



// $unpublishedPosts = array_filter($posts, function ($post) {
//     return !$post->published;
// });

// var_dump($unpublishedPosts);

// $modified = array_map(function ($post) {

//     return ['title' => $post->title];
// }, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);