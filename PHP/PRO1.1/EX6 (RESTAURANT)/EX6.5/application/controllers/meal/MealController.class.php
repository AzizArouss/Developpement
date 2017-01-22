<?php


class MealController
{
	public function httpGetMethod(Http $http, array $queryFields)
	{

echo '<pre>';
var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'array_key_exists(id, $queryFields):'=> array_key_exists('id', $queryFields)));
debug_print_backtrace();
echo '</pre>';
        // Validation de la query string.
        if(array_key_exists('id', $queryFields) == true)
        {
            if(ctype_digit($queryFields['id']) == true)
            {
				// Récupération des informations sur l'aliment.
                $mealModel = new MealModel();
				$meal      = $mealModel->find($queryFields['id']);

				/*
				 * Sérialisation de l'aliment (qui est un tableau PHP) en une
				 * chaîne de caractères JSON puis envoi de la réponse HTTP.
				 */
				$http->sendJsonResponse($meal);
            }
        }
        exit();
        // En cas d'erreur, redirection vers la page d'accueil.
        // $http->redirectTo('/');
	}
}