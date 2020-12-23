<?php
/**
 * RestPrekeAprasymas.php
 * Created by Giedrius Tumelis.
 * Date: 18.7.30
 * Time: 11.04
 */

namespace Catalog\B2b\Common\Data\Legacy\Catalog;

use Catalog\B2b\Common\Helper\Utils;

class Nuotraukos
{
    public $versija;
    /** @var string */
    public $statusas;
    /** @var  Nuotrauka */
    public $nuotrauka;
    /** @var  Nuotrauka */
    public $nuotrauka2;
    /** @var  Nuotrauka */
    public $nuotrauka3;
    /** @var  Nuotrauka */
    public $nuotrauka4;
    /** @var  Nuotrauka */
    public $nuotrauka5;
    /** @var  Nuotrauka */
    public $nuotrauka6;
    /** @var  Nuotrauka */
    public $nuotrauka7;
    /** @var  Nuotrauka */
    public $nuotrauka8;
    /** @var  Nuotrauka */
    public $nuotrauka9;

    public $info_provider;

    /**
     * @param $nuotraukos
     * @return Nuotraukos
     */
    public static function convert ( $nuotraukos ) {
        /** @var Nuotraukos $nuotraukosObj */
        $nuotraukosObj = Utils::objectToObject($nuotraukos, Nuotraukos::class);
        return $nuotraukosObj;
    }
}