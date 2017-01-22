<?php
include __DIR__.'/../vendor/autoload.php';

use Silex\Application;
use MonProjet\Controller;

$app = new Application();
$app['debug'] = true;

$app->error(function(Exception $exception, $httpStatusCode)
{
    return "<h1>ERREUR $httpStatusCode !</h1>".$exception->getMessage();
});

$app -> get('/', function()
{
	$PATH = '';
	$tab = ['Babane' => 'Jaune', 'Abricot' => 'Orange', 'Fraise' => 'Rouge'];
	$prenom = 'Aziz';
	$TITLE = $tab;
	$template = 'HomePage.phtml';
	ob_start();

	include 'View/Layout.phtml';
	return ob_get_clean();
});

$app -> get('/hello', function()
{
	$PATH = '../';
	$tab = "Salut !";
	$TITLE = $tab;
	$template = 'View/HelloPage.phtml';
	ob_start();

	include 'View/Layout.phtml';
	return ob_get_clean();
});

$app -> get('/clients', function()
{
	$PATH = '../';
	$tab = "ClientPage !";
	$TITLE = $tab;
	$template = 'View/ClientPage.phtml';
	ob_start();

	include 'View/Layout.phtml';
	return ob_get_clean();
});

$app -> get('/bonjour', function()
{
	$PATH = '../';
	$tab = "BonjourPage !";
	$TITLE = $tab;
	$template = 'View/BonjourPage.phtml';
	ob_start();

	include 'View/Layout.phtml';
	return ob_get_clean();
});

$app -> get('/flickr', function()
{
	$PATH = '../';
	$tab = "FlickrPage !";
	$TITLE = $tab;
	$template = 'View/FlickrPage.phtml';
	ob_start();

	include 'View/Layout.phtml';
	return ob_get_clean();
});

$app->run();