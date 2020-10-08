<?php

namespace App\Controller;

use App\Models\Categorie;

class DefaultController
{
    /**
     * Ces fonctions sont ce
     * qu'on appelle une "action".
     * Une action est une page.
     * ---------------------------
     * Page d'accueil du site
     */
    public function home()
    {
        $categorieModel = new Categorie();
        $categories = $categorieModel->getCategories();
        print_r($categories);

        echo "<h1>PAGE D'ACCUEIL DU CONTROLEUR</h1>";
    }

    /**
     * Page categorie du site
     */
    public function category()
    {
        echo "<h1>PAGE CATEGORIE DU CONTROLEUR</h1>";
    }

    /**
     * Page article du site
     */
    public function article()
    {
        echo "<h1>PAGE ARTICLE DU CONTROLEUR</h1>";
    }
}