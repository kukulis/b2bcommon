<?php
/**
 * ErrorResponse.php
 * Created by Giedrius Tumelis.
 * Date: 20.6.17
 * Time: 14.35
 */

namespace Catalog\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

class ErrorResponse
{
    const TYPE_VALIDATION='VALIDATION';
    const TYPE_ERROR='ERROR';
    const TYPE_NOT_FOUND='NOT_FOUND';
    const TYPE_SYSTEM='SYSTEM';
    const TYPE_WARNING='WARNING';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $type;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $message;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $statusCode;

    /**
     * ErrorResponse constructor.
     * @param $type
     * @param $message
     * @param $statusCode
     */
    public function __construct($type, $message, $statusCode)
    {
        $this->type = $type;
        $this->message = $message;
        $this->statusCode = $statusCode;
    }
}