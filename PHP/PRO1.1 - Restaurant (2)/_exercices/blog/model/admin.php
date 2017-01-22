<?php
$nomClass = ucfirst(strtolower($page));
// include_once(PATH_MODEL.'/'.$nomClass.'.class.php');
$class = new $nomClass($pdo);

$posts = $class->adminShowPosts();
// $posts = 