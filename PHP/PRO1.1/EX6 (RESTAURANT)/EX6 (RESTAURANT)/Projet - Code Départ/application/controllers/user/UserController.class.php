<?php

class UserController {
	public function httpGetMethod(){
		return [ '_form' => new UserForm() ];
	}

	public function httpPostMethod(Http $http, array $formFields){
		try {
            $userModel = new UserModel();
			$userModel->signUp
			(
				$formFields['lastName'],
				$formFields['firstName'],
				$formFields['email'],
				$formFields['password'],
				$formFields['birthYear'].'-'.
			    $formFields['birthMonth'].'-'.
			    $formFields['birthDay'],
				$formFields['address'],
				$formFields['city'],
				$formFields['zipCode'],
				$formFields['phone']
			);

            $http->redirectTo('/');
		}

		catch(DomainException $exception){
            $form = new UserForm();
            $form->bind($formFields);
            $form->setErrorMessage($exception->getMessage());

			return [ '_form' => $form ];
		}
	}
}

/*class UserController {
	function  httpGetMethod(){
		$form = new UserForm();
		return['_form' => $form];
	}

		function httpPostMethod(Http $http, array $formFields){
			try {
				$userModel = new UserModel();
				$userModel -> insertUp
				(
				$formFields['firstname'],
				$formFields['lastname'],
				$formFields['email']
				);
				$http -> redirectTo('/');
			}

		    catch(DomainException $e){
			$form = new UserForm();
			$form -> bind($formFields);
			$form -> setErrorMessage($e -> getMessage());
			return ['_form' => $form];
		}
	}
}*/