<?php
// include le controller des pages en général et surtout
// qui instancie la class associée à la page
include_once(PATH_CONTROLLER.'/blog.controller.php');
$posts = $class->showAllPosts();
