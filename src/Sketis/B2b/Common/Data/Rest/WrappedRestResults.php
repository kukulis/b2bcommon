<?php
namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

class WrappedRestResults
{
    /**
     * @var RestResults
     * @Serializer\SerializedName("Results")
     * @Serializer\Type("Sketis\B2b\Common\Data\Rest\RestResults")
     */
    public $results;
}