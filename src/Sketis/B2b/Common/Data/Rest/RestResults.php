<?php
namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RestResults
 */
class RestResults
{
    /** @var string */
    const RESULT_OK='OK';

    /** @var string */
    const RESULT_ERROR='ERROR';

    /** @var string */
    const RESULT_WARNING='WARNING';

    /** @var string */
    const RESULT_VALIDATE='VALIDATE';

    /** @var string */
    const RESULT_SYSTEM='SYSTEM';

    /** @var string  */
    const RESULT_ACCESS='ACCESS';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $resultCode = self::RESULT_OK;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $errorMessage='';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $message;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $dataType;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    public $data;

    /**
     * @var string naudojamas tik kataloge
     * @Serializer\Type("string")
     */
    public $hintName='';

    public function getHttpResultCode() {
        if ( $this->resultCode==self::RESULT_OK || $this->resultCode==self::RESULT_WARNING ) {
            return 200;
        }
        else if ($this->resultCode==self::RESULT_VALIDATE) {
            return 400;
        }
        else if ( $this->resultCode==self::RESULT_ERROR  ) {
            return 404;
        }
        else if ($this->resultCode==self::RESULT_ACCESS) {
            return 403;
        }
        else {
            return 500;
        }
    }
}