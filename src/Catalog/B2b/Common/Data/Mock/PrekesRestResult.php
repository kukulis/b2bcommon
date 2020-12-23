<?php
/**
 * PrekesRestResult.php
 * Created by Giedrius Tumelis.
 * Date: 18.7.30
 * Time: 11.06
 */

namespace Catalog\B2b\Common\Data\Mock;

class PrekesRestResult
{
    const RESULT_FAIL='fail';
    const RESULT_OK='ok';

    public $result=self::RESULT_OK;
    public $errorMessage='';

    /** @var  Prekes */
    public $Prekes;
}