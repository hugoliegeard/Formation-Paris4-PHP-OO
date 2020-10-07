<?php

# Importation de notre class Ecole
require_once 'models/Ecole.php';

# Importation de notre class Eleve
require_once 'models/Eleve.php';

# Importation de notre class Classe
require_once 'models/Classe.php';

/**
 * Création d'une instance de la class Ecole.
 * Notre variable $ecole est un objet de cette class.
 * Cet objet a accès aux propriétés et méthodes de la class.
 */
# $ecole = new Ecole();

# Affecter des valeurs aux propriétés notre objet
# $ecole->nom = "Webforce3";
# $ecole->adresse = "9 Rue Geoffroy L'Asnier, 75004 Paris";
# $ecole->capacite = 20;
# $ecole->type = "Formation";
# $ecole->directeur = "Sylviane PEREZ";

# Créons un nouvel objet et hydratons le.
# $ecole2 = new Ecole();
# $ecole2->nom = "Ecole42";
# $ecole2->adresse = "Boulevard de Clichy, 75017 Paris";
# $ecole2->capacite = 300;
# $ecole2->type = "Formation";
# $ecole2->directeur = "Xavier NIEL";

$ecole = new Ecole(
    'WF3',
    '9 Rue Geoffroy L\'Asnier, 75004 Paris',
    18,
    'formation',
    'Hugo LIEGEARD'
);

$ecole2 = new Ecole(
    'LePoleS',
    '11 Allée Saint-Exupéry, 92390 Villeneuve-la-Garenne',
    20,
    'formation',
    'Claude Sicart'
);

echo '<pre>';
print_r($ecole);
print_r($ecole2);
echo '</pre>';

# Affichez le nom de l'école dans une balise h1
//echo '<h1>' . $ecole->nom . '</h1>';
//echo '<h1>' . $ecole2->nom . '</h1>';
echo '<h1>' . $ecole->getNom() . '</h1>';

# Grâce au setter, je fournis à mon objet
# un moyen de modifier la valeur d'une propriété.
$ecole->setNom('WF3 Paris');

echo '<h1>' . $ecole->getNom() . '</h1>';

/* --
    CONSIGNE : En vous appuyant sur notre travail
    avec la classe Ecole ; créez maintenant les
    classes "Classe" et "Eleve" dans des fichiers
    séparés.
    --------------------------------------
    Classe.php et Eleve.php : Propriétés,
        Constructeur, Getters & Setters.
    --------------------------------------
    Eleve : prenom, nom, age, sexe
    Classe : nom, capacite, professeurP
-- */

# Création des Eleves
$eleve1 = new Eleve('Zaklin', 'POCANDI', 49, 'femme');
$eleve2 = new Eleve('Koumba', 'KONARE', 28, 'femme');
$eleve3 = new Eleve('Emmanuelle', 'ARNAUD', 33, 'femme');
$eleve4 = new Eleve('Sandra', 'JACQUES', 48, 'femme');

# Création des Classes
$front = new Classe('Front', 18, 'Fadhi NASRI');
$back = new Classe('Back', 18, 'Mathieu QUITTARD');
$full = new Classe('Fullstack', 18, 'Hugo LIEGEARD');

# Problématique
# Comment affecter chaque élève dans une classe ?
$front->addEleve($eleve2);
$front->addEleve($eleve4);
$back->addEleve($eleve1);
$full->addEleve($eleve3);

echo '<pre>';
print_r($front);
print_r($back);
print_r($full);
echo '</pre>';

# Comment affecter chaque classe dans une école ?
$ecole->addClasse($front);
$ecole->addClasse($back);
$ecole->addClasse($full);

// $ecole->setClasses([$front, $back, $full]);

echo '<pre>';
print_r($ecole);
echo '</pre>';

/* --
    CONSIGNE : En partant de l'objet $ecole ; affichez la liste
    ol, ul, li des classes et pour chaque classes les étudiants.
-- */

# 1. Récupérer via $ecole et Afficher la liste des classes
$classes = $ecole->getClasses();
// print_r($classes);

# On va parcourir nos classes
echo '<ol>';
/** @var Classe $classe */
foreach ($classes as $classe) {
    # Afficher le nom de la classe
    echo '<li>' . $classe->getNom(). '</li>';
    # 2. Récupérer et Afficher la liste des élèves
    $eleves = $classe->getEleves();
    echo '<ul>';
    /** @var Eleve $eleve */
    foreach ($eleves as $eleve) {
        echo '<li>';
            echo $eleve->getPrenom(). ' ' . $eleve->getNom();
        echo '</li>';
    }
    echo '</ul>';
}
echo '</ol>';


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';