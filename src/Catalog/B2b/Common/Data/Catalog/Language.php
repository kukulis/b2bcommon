<?php

namespace Catalog\B2b\Common\Data\Catalog;

use JMS\Serializer\Annotation as Serializer;

class Language
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $code;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $locale_code;

}