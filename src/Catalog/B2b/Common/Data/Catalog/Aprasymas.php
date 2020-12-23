<?php
/**
 * RestPrekeAprasymas.php
 * Created by Giedrius Tumelis.
 * Date: 18.7.30
 * Time: 11.04
 */

namespace Catalog\B2b\Common\Data\Catalog;

use Catalog\B2b\Common\Helper\KatalogasPrekeHelper;
use Catalog\B2b\Common\Helper\Utils;

class Aprasymas
{
    public $pavadinimas;

    /**
     * Aprašymui naudoti šį laukelį
     * @var string
     */
    public $aprasymas;

    /**
     * @deprecated nenaudoti šio laukelio, nes jis skirtas tik perėjimui nuo pragmos į Katalogo struktūrą, vietoje jo
     *  naudoti $aprasymas
     * @var string
     */
    public $ilgas_aprasymas;

    public $etiketes_tekstas;
    public $etiketes_dydis;
    public $gamintojas;
    public $platintojas;
    public $sudetis;

    public $info_provider;

    /** @var array */
    public $tagai;

    /** @var  Nuotrauka */
    public $nuotrauka;

    public $remote_id;
    public $modificationTimestamp;

    public $var_name;

    /**
     * @return string
     */
    public function getAprasymas(): string
    {
        return KatalogasPrekeHelper::getAprasymas($this);
    }

    /**
     * @param $aprasymas
     * @return Aprasymas
     */
    public static function convert ( $aprasymas ) {
        /** @var Aprasymas $aprasymasObj */
        $aprasymasObj = Utils::objectToObject($aprasymas, Aprasymas::class);
        return $aprasymasObj;
    }
}