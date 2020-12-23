<?php
/**
 * ImportResult.php
 * Created by Giedrius Tumelis.
 * Date: 19.10.17
 * Time: 17.49
 */

namespace Catalog\B2b\Common\Data\Legacy\Catalog;


class ImportResult
{
    public $count = 0;

    public $totalCount = 0;

    public $countPrekesInserted = 0;
    public $countPrekesUpdated = 0;
    public $countPrekesErrors = 0;

    public $countAtributaiInserted = 0;
    public $countAtributaiUpdated = 0;
    public $countAtributaiErrors = 0;

    public $countAprasymaiInserted = 0;
    public $countAprasymaiUpdated = 0;
    public $countAprasymaiErrors = 0;

    public $countNuotraukosInserted = 0;
    public $countNuotraukosUpdated = 0;
    public $countNuotraukosErrors = 0;

    public $countNotFound = 0;

    /** @var ImportResultObject[] */
    public $resultObjects=[];
}