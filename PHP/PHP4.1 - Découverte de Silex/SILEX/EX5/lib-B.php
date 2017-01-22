<?php
namespace NS_B;

require_once(__DIR__ . '/lib-A.php');

class ClassB {
    // /!\ Il faut utiliser \NS_A\ClassA et non NS_A\ClassA,
    // puisque nous sommes actuellement dans NS_B !
    public static function method(\NS_A\ClassA $a) {
        var_dump(__NAMESPACE__ . '    \    ' . __CLASS__ . ' :: ' . __FUNCTION__.'<br>' );
        var_dump($a);
    }
}