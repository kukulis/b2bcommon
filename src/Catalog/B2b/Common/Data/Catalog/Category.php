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

    // --

    public $language;
    public $name;
    public $description;
}