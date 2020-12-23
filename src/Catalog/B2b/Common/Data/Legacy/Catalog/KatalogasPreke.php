<?php
/**
 * RestPreke.php
 * Created by Giedrius Tumelis.
 * Date: 18.7.30
 * Time: 11.03
 */

namespace Catalog\B2b\Common\Data\Legacy\Catalog;

use Catalog\B2b\Common\Helper\Utils;

/**
 * Class KatalogasPreke
 * @package Kotas\Katalogas\Data
 */
class KatalogasPreke
{
    public $nomnr;
    public $pavadinimas;
    public $brandas;
    public $linija;
    public $depozito_kodas;
    public $muitines_kodas;

    public $origin_country;

    public $parent;

    /** @deprecated naudoti nomnr, visais avejais tai tas pats arba barkodo nėra **/
    public $barkodas;

    public $info_provider;

    /** @var  Atributai */
    public $Atributai;

    /** @var Klasifikatorius[] */
    public $categories;

    /** @var Klasifikatorius[] */
    public $tags;

    /** @var  Aprasymas */
    public $Aprasymas;

    /** @var  Nuotraukos */
    public $Nuotraukos;

    //Meta informacija, ne laukelis
    public $kalba;

    public function __construct()
    {
        $this->Aprasymas = new Aprasymas();
        $this->Atributai = new Atributai();
        $this->Nuotraukos = new Nuotraukos();
    }

    /**
     * @param $preke
     * @return KatalogasPreke
     */
    public static function convert( $preke ) {
        /** @var KatalogasPreke $prekeObj */
        $prekeObj = Utils::objectToObject($preke, KatalogasPreke::class );

        $prekeObj->Atributai = Atributai::convert( Utils::emptyStdClass( $prekeObj->Atributai));
        $prekeObj->Aprasymas = Aprasymas::convert( Utils::emptyStdClass( $prekeObj->Aprasymas));
        $prekeObj->Nuotraukos = Nuotraukos::convert( Utils::emptyStdClass( $prekeObj->Nuotraukos));

        return $prekeObj;
    }
}