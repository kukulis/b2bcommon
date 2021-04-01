<?php
/**
 * Category.php
 * Created by Giedrius Tumelis.
 * Date: 2021-03-30
 * Time: 16:26
 */

namespace Catalog\B2b\Common\Data\Catalog;


class Category
{
    public $code;
    public $parent;
    public $confirmed;
    public $customsCode;
    public $dateCreated;

    // -- might be unfilled by unavailable data

    public $language;
    public $name;
    public $description;

    // -- filled only in some requests
    public $path=null;
    public $children=[];
}