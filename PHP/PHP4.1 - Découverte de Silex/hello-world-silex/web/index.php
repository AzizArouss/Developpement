<?php
// Chargement du fichier d'autoload généré par Composer.
include __DIR__.'/../vendor/autoload.php';

// Annonce au PHP que la classe Application se trouve dans un namespace Silex
use Silex\Application;

// Instancie la classe Application (qui se trouve dans le namespace Silex)
$app = new Application();

/////////////////////////////////////////////////////////////////////////////////////////
// CONFIGURATION DE L'APPLICATION                                                      //
/////////////////////////////////////////////////////////////////////////////////////////
// Activation du mode debogage de Silex
$app['debug'] = true;

// Code exécuté en cas d'erreur fatale PHP ou dans l'utilisation de Silex.
$app->error(function(Exception $exception, $httpStatusCode)
{
    /*
     * Si $httpStatusCode vaut 404 cela signifie qu'aucune route ne correspond
     * à l'URL spécifiée.
     */

    return "<h1>ERREUR $httpStatusCode !</h1>".$exception->getMessage();
});

/////////////////////////////////////////////////////////////////////////////////////////
// DECLARATION DES ROUTES                                                              //
/////////////////////////////////////////////////////////////////////////////////////////

$app->get
(
    '/',
    function()                  // Fonction anonyme avec le code du contrôleur
    {
        return 'Hello world !';
    }
);

$app->get
(
    '/hello',
    function()                  // Fonction anonyme avec le code du contrôleur
    {
        return 'Autre chose !';
    }
);

$app->get
(
    '/bonjour/{name}', 
    function ($name) use ($app)
    {
        return 'Bonjour ' . $app->escape($name);
    }
);

$app->get
(
    '/coucou/{firstName}/{age}', 
    function ($firstName, $age) use ($app)
    {
    	return 'Coucou, je m\'appelle ' . $app->escape($firstName).' et j\'ai '.$app->escape($age).' ans(s)<br>';
    }
)
-> value('firstName', 'Aziz')
-> value('age', '23')
-> assert('age', '\d+');  

/////////////////////////////////////////////////////////////////////////////////////////
// EXECUTION DE L'APPLICATION SILEX                                                    //
/////////////////////////////////////////////////////////////////////////////////////////

$app->run();