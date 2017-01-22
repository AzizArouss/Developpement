<?php
namespace NS_A;

class ClassA {
    public function method() {
        var_dump(__NAMESPACE__ . '    \    ' . __CLASS__ . '    \    ' . __FUNCTION__.'<br>');
    }
}