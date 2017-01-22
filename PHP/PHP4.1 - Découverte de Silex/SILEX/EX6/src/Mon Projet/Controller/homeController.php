<?php

namespace MonProjet\Controller;

class HomeController {
    function showHomeT(Application $app){
        $prenom = 'nico';
        $tab =[
                'banane'=>'jaune', 
                'fraise'=>'rouge', 
                'abricot'=>'orange'
              ];

        $template = 'HomeView.phtml.twig';
        $TITLE = ""

        return $app['twig']->render
        (
            $template,
            [   // Liste des variables Twig disponibles dans le template.
                'firstName' => $prenom,
                'tab'    => $tab
            ]
        );
    }
}

?>