<?php

/**
 * Ici, notre fichier index.php représente
 * le point d'entrée unique des requètes
 * de notre application.
 */

# Aperçu de $_GET
# echo '<pre>';
# print_r( $_GET );
# echo '</pre>';

# Chargement Automatique des classes
require_once '../autoload.php';

# Chargement des routes
require_once '../routes.php';