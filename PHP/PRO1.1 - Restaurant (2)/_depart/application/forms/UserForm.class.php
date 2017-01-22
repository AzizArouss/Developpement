<?php

/**
 * Created by PhpStorm.
 * User: franck
 * Date: 27/12/2016
 * Time: 17:54
 */
class UserForm extends Form
{
    function build()
    {
        $this->addFormField('firstName');
        $this->addFormField('lastName');
        $this->addFormField('email');
    }
}