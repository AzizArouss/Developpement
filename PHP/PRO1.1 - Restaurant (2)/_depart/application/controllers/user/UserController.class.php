<?php

/**
 * Created by PhpStorm.
 * User: franck
 * Date: 27/12/2016
 * Time: 17:52
 */
class UserController
{
    public function httpGetMethod()
    {
        echo '<pre>';
        var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'httpGetMethod: '));
        echo '</pre>';
//        return ['echo'=> 'coucou'];
        return [ '_form' => new UserForm()	];
    }


    public function httpPostMethod(Http $http, array $formFields)
    {
echo '<pre>';
var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'httpPostMethod: '));
echo '</pre>';
        // on récupère le formulaire d'inscription et on va l'enregister dans la table user
        try {
            // Inscription de l'utilisateur.
            $userModel = new UserModel();
            $userSignUp = $userModel->signUp($formFields['lastName'], $formFields['firstName'], $formFields['email']);

            // Redirection vers la page d'accueil.
            $http->redirectTo('/');

        } catch (DomainException $exception) {
            // Réaffichage du formulaire avec un message d'erreur.
            // instanciation  du formulaire UserForm
            $form = new UserForm();
            // affectation des valeurs récupérées dans les names
            $form->bind($formFields);
            // récupère l'erreur trouvée et catchée dans la variable $exception->getMessage()
            // et la sauvegarde grace à la méthode setErrorMessage()
            $form->setErrorMessage($exception->getMessage());

            // on renvoie le formulaire
            // permet de variabiliser les names pour les afficher de nouveau
            return ['_form' => $form];

        }

    }

}