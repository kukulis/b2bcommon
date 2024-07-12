<?php

namespace Catalog\B2b\Common\Data\Catalog;

use JMS\Serializer\Annotation as Serializer;
use DateTime;

/**
 * This class is for DTO (Data Transfer Object) purposes
 */
class Product
{
    /**
     * @var Category[]
     * @Serializer\Type("array<Catalog\B2b\Common\Data\Catalog\Category>")
     */
    public $categories;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $sku;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    public $lastUpdate;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public $version = 0;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $brand;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $line;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $parentSku;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $originCountryCode;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $vendor;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $manufacturer;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $type;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $purpose;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $measure;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $color;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    public $forMale = false;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    public $forFemale = false;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $size;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $packSize;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    public $packAmount;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $weight = 0;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $weightBruto = 0;


    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $length = 0;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $height = 0;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $width = 0;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $deliveryTime;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $depositCode;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $codeFromCustom;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $guaranty;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $codeFromSupplier;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $codeFromVendor;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $productgroup;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    public $priority;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    public $googleProductCategoryId = 0;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $ean;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $language;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $name;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $description;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $label;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $variantName;

    /**
     * @Serializer\Type("string")
     * @Serializer\Accessor(getter="getTagsAsString",setter="setTagsFromString")
     */
    public $tags;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $labelSize;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $distributor;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $composition;

    /**
     */
    private $pricelistProduct;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $stock = 0;

    /**
     * Return the tags as a comma-separated string
     *
     * @return string
     */
    public function getTagsAsString(): string
    {
        if ( !is_array($this->tags)) {
            return '';
        }
        return implode(',', $this->tags);
    }

    /**
     * Set the tags from a comma-separated string or an empty string
     */
    public function setTagsFromString(?string $tagsString)
    {
        if (empty($tagsString)) {
            $this->tags = [];
        } else {
            $this->tags = explode(',', $tagsString);
        }
    }

    public function getPricelistProduct() {
        return $this->pricelistProduct;
    }

    public function setPricelistProduct($pricelistProduct): void {
        $this->pricelistProduct = $pricelistProduct;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock(int $stock): void {
        $this->stock = $stock;
    }
}
