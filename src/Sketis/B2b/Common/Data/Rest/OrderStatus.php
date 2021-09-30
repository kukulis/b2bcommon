<?php
namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderStatus
 * @package Sketis\B2b\Common\Data
 */
class OrderStatus
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderNumber")
     */
    public $orderNumber;


    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;

    public static function create($orderNumber, $status) {
        $os = new OrderStatus();
        $os->orderNumber = $orderNumber;
        $os->status = $status;
        return $os;
    }

}