<?php
class TestpageController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
// echo '<pre>';
// var_dump(array("script" => __FILE__, "ligne" => __LINE__, 'coucou:'), 'prout');
// echo '</pre>';
        /*
         * Méthode appelée en cas de requête HTTP GET
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
         */
        // $http->redirectTo('/');
        return ['prenom'=>'franck', 'nom'=>'Servignat'];
    }
}
