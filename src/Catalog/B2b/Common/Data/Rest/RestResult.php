<?php
/**
 * RestResult.php
 * Created by Giedrius Tumelis.
 * Date: 2021-02-09
 * Time: 15:49
 */

namespace Catalog\B2b\Common\Data\Rest;


class RestResult
{
    const CODE_OK = 'OK';
    const CODE_ERROR = 'ERROR';
    const CODE_WARNING = 'WARNING';
    const CODE_VALIDATE = 'VALIDATE';

    public $httpCode=200;
    public $code;
    public $message;
    public $data=[];
}