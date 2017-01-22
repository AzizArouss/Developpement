<?php

class LogInModel extends Form {
    public function build(){
        $this->addFormField('Email');
        $this->addFormField('Password');
    }
}