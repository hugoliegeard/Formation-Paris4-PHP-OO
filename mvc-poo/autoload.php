<?php

# Autochargement des classes
spl_autoload_register(function( $class ) {
    # echo 'Chargement de : ' . $class . '<br>';
    $class = str_replace('App', '', $class);
    require_once '../src/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

# Chargement des controllers MANUEL
# require_once '../src/Controller/DefaultController.php';
# require_once '../src/Controller/UserController.php';