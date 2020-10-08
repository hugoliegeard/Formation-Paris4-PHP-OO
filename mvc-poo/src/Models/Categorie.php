<?php

namespace App\Models;

class Categorie
{
    /**
     * Retourne un tableau de catégories
     */
    public function getCategories()
    {
        return [
            'Politique', 'Economie', 'Culture'
        ];
    }
}