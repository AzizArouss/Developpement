lien
http://www.apprendre-php.com/tutoriels/tutoriel-42-les-exceptions-2me-partie.html
liste des class exceptions
hhttp://fr2.php.net/manual/fr/spl.exceptions.php


1/ D'abord faire écrire la fonction additionner
   puis 
   echo additionner(12, 3), '<br />';
   echo additionner('azerty', 54), '<br />';

2/ Try catch




<?php
function additionner($a, $b)
{
  if (!is_numeric($a) || !is_numeric($b))
  {
    throw new Exception('Les deux paramètres doivent être des nombres');
  }
  
  return $a + $b;
}



try // Nous allons essayer d'effectuer les instructions situées dans ce bloc.
{
  echo additionner(12, 3), '<br />';
  echo additionner('azerty', 54), '<br />';
  echo additionner(4, 8);
}

catch (Exception $e) // Nous allons attraper les exceptions "Exception" s'il y en a une qui est levée.
{
echo '<pre>';
    var_dump($e);
echo '</pre>';

  echo 'Une exception a été lancée. Message d\'erreur : ', $e->getMessage().'<br>';
}

echo 'Fin du script'; // Ce message s'affiche, ça prouve bien que le script est exécuté jusqu'au bout.

// L'utilisation du mot-clé throw permet de stopper l'exécution du programme et rediriger l'exception à travers ce dernier.

// Code source de la classe native Exception (extrait de la documentation officielle de PHP)
// <?php
 
// class Exception 
// {
//   protected $message = 'exception inconnu'; // message de l'exception
//   protected $code = 0;                      // code de l'exception défini par l'utilisateur
//   protected $file;                          // nom du fichier source de l'exception
//   protected $line;                          // ligne de la source de l'exception
 
//   function __construct(string $message=NULL, int code=0);
 
//   final function getMessage();              // message de l'exception
//   final function getCode();                 // code de l'exception
//   final function getFile();                 // nom du fichier source
//   final function getLine();                 // ligne du fichier source
//   final function getTrace();                // un tableau de backtrace()
//   final function getTraceAsString();        // chaîne formattée de trace
 
//   /* Remplacable */
//   function __toString();                    // chaîne formatée pour l'affichage
// }
// ?>