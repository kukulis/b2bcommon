<?php
/**
 * Product.php
 * Created by Giedrius Tumelis.
 * Date: 2021-02-09
 * Time: 15:52
 */

namespace Catalog\B2b\Common\Data\Catalog;


class Product
{
    public $sku;
    public $lastUpdate;
    public $version=0;
    public $brand;
    public $line;
    public $parentSku;
    public $originCountryCode;
    public $vendor;
    public $manufacturer;
    public $type;
    public $purpose;
    public $measure;
    public $color;
    public $forMale=false;
    public $forFemale=false;
    public $size;
    public $packSize;
    public $packAmount;
    public $weight=0;
    public $length=0;
    public $height=0;
    public $width=0;
    public $deliveryTime;
    public $depositCode;
    public $codeFromCustom;
    public $guaranty;
    public $codeFromSupplier;
    public $codeFromVendor;
    public $productgroup;
    public $priority;
    public $googleProductCategoryId=0;
    public $ean;

    // --
    public $language;
    public $name;
    public $description;
    public $label;
    public $variantName;
    public $tags;
    public $labelSize;
    public $distributor;
    public $composition;
}