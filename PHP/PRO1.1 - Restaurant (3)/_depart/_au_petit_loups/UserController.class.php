<?php
class UserController
{
    public function httpGetMethod()
    {
        return [ '_form' => new UserForm()];
    }


    public function httpPostMethod(Http $http, array $formFields)
    {
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
