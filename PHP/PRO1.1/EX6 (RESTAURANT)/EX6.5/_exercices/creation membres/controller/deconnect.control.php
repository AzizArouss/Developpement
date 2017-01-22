<?php
include(PATH_MODEL.'/'.$page.'.model.php');

// var_dump(array("script" => __FILE__, "ligne" => __LINE__, $GLOBALS));
header('location: index.php');
exit();

// include (PATH_VUE.'/layout.phtml');