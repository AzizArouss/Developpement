<?php

/**
 * Created by PhpStorm.
 * User: franck
 * Date: 27/12/2016
 * Time: 17:37
 */
class LoginController
{
    public function httpGetMethod()
    {
        return [ '_form' => new LoginForm()	];
    }
}