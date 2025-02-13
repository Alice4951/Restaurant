<?php
if (!empty($_POST)) {
    switch ($critere) {
        case 'nom':
            // recherche par nom
            $listeRestos = getRestosByNomR($nomR);
            break;
        case 'adresse':
            // recherche par adresse
            $listeRestos = getRestosByAdresse($voieAdrR, $cpR, $villeR);
            break;
    }
}