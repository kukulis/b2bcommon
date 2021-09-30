<?php
/**
 * GetOrdersRequestParams.php
 * Created by Giedrius Tumelis.
 * Date: 19.1.16
 * Time: 12.08
 */

namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetOrdersRequestParams
 * @package Sketis\B2b\Common\Data\Rest
 */
class GetOrdersRequestParams
{
    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("ordersNumbers")
     */
    public $ordersNumbers;
}