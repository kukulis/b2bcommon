<?php
/**
 * ImportResultObject.php
 * Created by Giedrius Tumelis.
 * Date: 19.10.17
 * Time: 17.48
 */

namespace Catalog\B2b\Common\Data\Legacy\Catalog;


class ImportResultObject
{
    const OK = 'OK';
    const UPDATED = 'Atnaujinta';
    const NOT_IMPORTED = 'Neimportuota';
    const NOT_FOUND = 'Nerasta';
    const ALREADY_EXISTS = 'Jau yra';
    const NOT_OURS = 'Ne mūsų';
    const ERROR = 'Klaida:';

    public $nomnr;
    public $preke;
    public $aprasymas;
    public $atributai;
    public $nuotraukos;
}