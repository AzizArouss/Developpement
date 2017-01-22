<?php
$nomClass = ucfirst(strtolower($page));
$class = new $nomClass($pdo, $id=1);
