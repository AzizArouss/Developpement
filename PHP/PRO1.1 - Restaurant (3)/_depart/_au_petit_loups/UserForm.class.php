<?php
class UserForm extends Form
{
    function build()
    {
        $this->addFormField('firstName');
        $this->addFormField('lastName');
        $this->addFormField('email');
    }
}
