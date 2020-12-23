<?php
namespace Catalog\B2b\Common\Helper;

use Catalog\B2b\Common\Data\Catalog\Aprasymas;
use Catalog\B2b\Common\Data\Catalog\KatalogasPreke;

class KatalogasPrekeHelper
{
    /**
     * @param Aprasymas $aprasymas
     * @return string
     */
    public static function getAprasymas($aprasymas): string
    {
        $ilgasAprasymas = '';

        if (!empty($aprasymas->aprasymas)) {
            $ilgasAprasymas .= $aprasymas->aprasymas;
        }

        // Naudojama dėl backward compatibility, nes ten sudėti aprašymai iš Pragmos
        if (!empty($aprasymas->ilgas_aprasymas)) {
            // papildomas tikrinimas, nes vis dėl to yra prekių Kataloge su dubliuotu aprašymu
            if($aprasymas->ilgas_aprasymas !== $aprasymas->aprasymas)
            {
                $ilgasAprasymas .= ' ' . $aprasymas->ilgas_aprasymas;
            }
        }

        return trim($ilgasAprasymas);
    }

    /**
     * @param KatalogasPreke[] $prekes
     * @return KatalogasPreke[]
     */
    public static function createMap ( $prekes ) {
        /** @var KatalogasPreke[] $map */
        $map = [];
        foreach ($prekes as $preke ) {
            $map[$preke->nomnr] = $preke;
        }
        return $map;
    }
}