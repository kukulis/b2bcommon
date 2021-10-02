<?php

namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

class FindOrdersOfStatusesRestParams
{
    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    public $statuses;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dateFrom")
     */
    public $dateFrom;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    public $limit;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    public $offset;
}