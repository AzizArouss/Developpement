<?php
require_once(__DIR__ . '/lib-A.php');
require_once(__DIR__ . '/lib-B.php');

$a = new NS_A\ClassA();
$a->method();

NS_B\ClassB::method($a);
