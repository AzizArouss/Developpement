<?php
// include le controller des pages en général et surtout
// qui instancie la class associée à la page
include_once(PATH_CONTROLLER.'/blog.controller.php');
if(empty($_POST))
{
	$post = $class->edit_post();
}else{
	$class->update_post($_POST);
}
