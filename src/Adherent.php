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
        $this->identifiant=self::concatenateId($nom,$prenom,$date_naissance);
    }

    public static function concatenateId(string $nom, string $prenom, DateTime $date_naissance)
    {

        return strtoupper((self::skip_accents($nom)).strtoupper(self::skip_accents($prenom)).$date_naissance->format('Y-m-d'));
    }

    public static function skip_accents(string $string)
    {
        $charset='utf-8';
        $str = htmlentities( $string, ENT_NOQUOTES, $charset );

        $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
        $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
        $str = preg_replace( '#&[^;]+;#', '', $str );

        return $str;
    }


}