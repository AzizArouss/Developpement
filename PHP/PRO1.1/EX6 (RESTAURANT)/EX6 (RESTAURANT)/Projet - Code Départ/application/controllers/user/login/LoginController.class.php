<?php

class LoginController{
	public function httpGetMethod(){
		$form = new UserForm();
		return['_form' => $form];
	}

	public function httpPostMethod(){
		try {
			$userModel = new LogInModel();
			$userModel -> insertUp(
				$formfields['email'],
				$formfields['password']
			);
			$http -> redirectTo('/');;
		}

		catch (DomainException $e){
			$form = new UserForm();
            $form->bind($formFields);
            $form->setErrorMessage($exception->getMessage());

			return [ '_form' => $form ];
		}
	}
}