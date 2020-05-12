<?php


class Adherent
{
    private $identifiant;


    /**
     * Adherent constructor.
     * @param string $nom
     * @param string $prenom
     * @param DateTime $date_naissance
     */
    public function __construct(string $nom,string $prenom,DateTime $date_naissance)
    {
        $this->identifiant=concatenateId($nom,$prenom,$date_naissance);
    }
}