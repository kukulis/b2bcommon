<?php


namespace Catalog\B2b\Common\Data\Catalog;

use JMS\Serializer\Annotation as Serializer;


class Package
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $typeCode;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $weight=0;

    public function setTypeCode(?string $typeCode): Package
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}