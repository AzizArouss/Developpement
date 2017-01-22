<?php

class UserForm extends Form {
    public function build(){
        $this->addFormField('lastName');
        $this->addFormField('firstName');
        $this->addFormField('address');
        $this->addFormField('city');
        $this->addFormField('zipCode');
        $this->addFormField('phone');
        $this->addFormField('email');
    }
}

/*class UserForm extends Form
{
    function build()
    {
        $this->addFormField('firstname');
        $this->addFormField('lastname');
        $this->addFormField('email');
    }
}*/