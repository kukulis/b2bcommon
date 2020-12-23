<?php
/**
 * ErrorResponse.php
 * Created by Giedrius Tumelis.
 * Date: 20.6.17
 * Time: 14.35
 */

namespace Catalog\B2b\Common\Data\Rest;


class ErrorResponse
{
    const TYPE_VALIDATION='VALIDATION';
    const TYPE_ERROR='ERROR';
    const TYPE_NOT_FOUND='NOT_FOUND';
    const TYPE_SYSTEM='SYSTEM';
    const TYPE_WARNING='WARNING';

    public $type;
    public $message;
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