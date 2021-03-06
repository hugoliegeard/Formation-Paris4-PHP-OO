<?php


class Classe
{
    private $nom,
            $capacite,
            $professeurP,
            $eleves;

    /**
     * Classe constructor.
     * @param $nom
     * @param $capacite
     * @param $professeurP
     */
    public function __construct($nom, $capacite, $professeurP)
    {
        $this->nom = $nom;
        $this->capacite = $capacite;
        $this->professeurP = $professeurP;
        $this->eleves = [];
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @param mixed $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    /**
     * @return mixed
     */
    public function getProfesseurP()
    {
        return $this->professeurP;
    }

    /**
     * @param mixed $professeurP
     */
    public function setProfesseurP($professeurP)
    {
        $this->professeurP = $professeurP;
    }

    /**
     * @return array
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * @param array $eleves
     */
    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
    }

    public function addEleve(Eleve $eleve)
    {
        $this->eleves[] = $eleve;
    }

}