<?php
$user = new User();
$user->set_idusers($_SESSION['user']['session']['idusers']);
// fetch les infos du user 
// qui est ensuite injecté danss les propriétés du user
$user_infos = $user->get_user_infos();
$user->indices_en_variables();
