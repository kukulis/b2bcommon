<?php
/**
 * RestResult.php
 * Created by Giedrius Tumelis.
 * Date: 2021-02-09
 * Time: 15:49
 */

namespace Catalog\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

class RestResultProducts
{
    const CODE_OK = 'OK';
    const CODE_ERROR = 'ERROR';
    const CODE_WARNING = 'WARNING';
    const CODE_VALIDATE = 'VALIDATE';

    /**
     * @var string
     * @Serializer\Type("integer")
     */
    public $httpCode=200;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $code;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $message;


    /**
     * @var string
     * @Serializer\Type("array<Catalog\B2b\Common\Data\Catalog\Product>")
     */
    public $data=[];
}