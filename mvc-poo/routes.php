<?php

# Récupération des paramètres GET de l'URL.
$controller = 'App\\Controller\\' . ucfirst( $_GET['controller'] ) . 'Controller';
$action = $_GET['action'];

# Routage AUTOMATIQUE de notre application
# $obj = new $controller(); //DefaultController, UserController, ...
# $obj->$action(); // home, category, register, ...
call_user_func_array([ new $controller, $action], []);

# Création des objets
# $defaultCtrl = new DefaultController();
# $userCtrl = new UserController();

# Routage MANUEL de notre application
/*if ( $controller == 'default' && $action == 'home' ) {
    $defaultCtrl->home();
}

if ( $controller == 'default' && $action == 'category' ) {
    $defaultCtrl->category();
}

if ( $controller == 'default' && $action == 'article' ) {
    $defaultCtrl->article();
}

if ( $controller == 'user' && $action == 'register' ) {
    $userCtrl->register();
}

if ( $controller == 'user' && $action == 'login' ) {
    $userCtrl->login();
}

if ( $controller == 'cart' && $action == 'home' ) {
    echo "<h1>PAGE PANIER</h1>";
}

if ( $controller == 'cart' && $action == 'add' ) {
    echo "<h1>PAGE AJOUTER UN PRODUIT AU PANIER</h1>";
}

if ( $controller == 'cart' && $action == 'remove' ) {
    echo "<h1>PAGE RETIRER UN PRODUIT AU PANIER</h1>";
}*/