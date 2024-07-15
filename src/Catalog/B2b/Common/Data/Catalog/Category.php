<?php

namespace Catalog\B2b\Common\Data\Catalog;

use JMS\Serializer\Annotation as Serializer;
use DateTime;

class Category
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $code;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $parent;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $confirmed;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $customsCode;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $dateCreated;

    // -- might be unfilled by unavailable data

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $language;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $description;

    // -- filled only in some requests
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $path=null;

    /**
     * @var string
     * @Serializer\Type("array")
     */
    public $children=[];


}