<?php
namespace Catalog\B2b\Common\Data\Legacy\Catalog;

use \stdClass;

/**
 * Class StockData
 * @package Kotas\Pragma\Data
 */
class StockData
{
    /** @var String */
    public $NomNr;
    /** @var int */
    public $Liko=0;
    /** @var float` */
    public $kaina=0;
    /** @var string */
    public $pavadinimas=''; // pavadinimo neliks
    /** @var int pristatymo laikas dienomis */
    public $pristatymoLaikas;
    /** @var int pristatymo laikas dienomis */
    public $pristatymoLaikasMax;
    /** @var int Antkainis procentais */
    public $minAntkainis=0;

    /**
     * @param stdClass $r
     * @return StockData
     */
    public static function convert( stdClass  $r ) {
        $stockData = new StockData();
        $stockData->NomNr = $r->NomNr;
        $stockData->Liko = $r->Liko;
        $stockData->kaina = $r->kaina;
        $stockData->pavadinimas = $r->pavadinimas;
        $stockData->pristatymoLaikas = $r->pristatymoLaikas;
        $stockData->pristatymoLaikasMax = $r->pristatymoLaikasMax;
        $stockData->minAntkainis = $r->minAntkainis;
        return $stockData;
    }

    /**
     * Funkcija, skirta valdyti nulinius kiekius.
     *
     * @return int
     */
    public function getPrekeKiekis(){
        if( $this->Liko != null){
            $kiekis = $this->Liko;
        } else{
            $kiekis = 0;
        }
        $kiekis = intval($kiekis);
        return $kiekis;
    }
}