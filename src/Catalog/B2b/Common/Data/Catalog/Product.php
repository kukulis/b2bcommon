<?php

namespace Catalog\B2b\Common\Data\Catalog;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

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
     * @Serializer\SerializedName("last_update")
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
     * @Serializer\SerializedName("parent_sku")
     */
    public $parentSku;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("origin_country_code")
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
     * @Serializer\SerializedName("for_male")
     */
    public $forMale = false;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("for_female")
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
     * @Serializer\SerializedName("pack_size")
     */
    public $packSize;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pack_amount")
     */
    public $packAmount;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $weight = 0.0;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight_bruto")
     */
    public $weightBruto = 0.0;


    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $length = 0.0;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $height = 0.0;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $width = 0.0;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delivery_type")
     */
    public $deliveryTime;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deposit_code")
     */
    public $depositCode;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code_from_custom")
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
     * @Serializer\SerializedName("code_from_supplier")
     */
    public $codeFromSupplier;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code_from_vendor")
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
     * @Serializer\SerializedName("google_product_category_id")
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
     * @Serializer\SerializedName("variant_name")
     */
    public $variantName;

    /**
     * @Serializer\Type("string|array")
     * @Serializer\Accessor(getter="getTagsAsString",setter="setTagsFromString")
     */
    public $tags = [];

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("label_size")
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
     * not used in serialization
     */
    private $pricelistProduct;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $stock = 0;


    /**
     * @var Package[]
     * @Serializer\Type("array<Catalog\B2b\Common\Data\Catalog\Package>")
     */
    private $packages = [];

    /**
     * Return the tags as a comma-separated string
     *
     * @return string
     */
    public function getTagsAsString(): string
    {
        if (!is_array($this->tags)) {
            return '';
        }
        return implode(',', $this->tags);
    }

    /**
     * Set the tags from a comma-separated string or an empty string
     */
    public function setTagsFromString(?string $tagsString): self
    {
        if (empty($tagsString)) {
            $this->tags = [];
        } else {
            $this->tags = explode(',', $tagsString);
        }

        return $this;
    }

    public function getPricelistProduct()
    {
        return $this->pricelistProduct;
    }

    public function setPricelistProduct($pricelistProduct): self
    {
        $this->pricelistProduct = $pricelistProduct;

        return $this;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function setCategories(array $categories): Product
    {
        $this->categories = $categories;
        return $this;
    }

    public function setSku(string $sku): Product
    {
        $this->sku = $sku;
        return $this;
    }

    public function setLastUpdate(DateTime $lastUpdate): Product
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    public function setVersion(int $version): Product
    {
        $this->version = $version;
        return $this;
    }

    public function setBrand(?string $brand): Product
    {
        $this->brand = $brand;
        return $this;
    }

    public function setLine(?string $line): Product
    {
        $this->line = $line;
        return $this;
    }

    public function setParentSku(?string $parentSku): Product
    {
        $this->parentSku = $parentSku;
        return $this;
    }

    public function setOriginCountryCode(?string $originCountryCode): Product
    {
        $this->originCountryCode = $originCountryCode;
        return $this;
    }

    public function setVendor(?string $vendor): Product
    {
        $this->vendor = $vendor;
        return $this;
    }

    public function setManufacturer(?string $manufacturer): Product
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function setType(?string $type): Product
    {
        $this->type = $type;
        return $this;
    }

    public function setPurpose(?string $purpose): Product
    {
        $this->purpose = $purpose;
        return $this;
    }

    public function setMeasure(?string $measure): Product
    {
        $this->measure = $measure;
        return $this;
    }

    public function setColor(?string $color): Product
    {
        $this->color = $color;
        return $this;
    }

    public function setForMale(bool $forMale): Product
    {
        $this->forMale = $forMale;
        return $this;
    }

    public function setForFemale(bool $forFemale): Product
    {
        $this->forFemale = $forFemale;
        return $this;
    }

    public function setSize(?string $size): Product
    {
        $this->size = $size;
        return $this;
    }

    public function setPackSize(?string $packSize): Product
    {
        $this->packSize = $packSize;
        return $this;
    }

    public function setPackAmount(?int $packAmount): Product
    {
        $this->packAmount = $packAmount;
        return $this;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function setWeightBruto($weightBruto)
    {
        $this->weightBruto = $weightBruto;
        return $this;
    }

    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function setDeliveryTime(?string $deliveryTime): Product
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    public function setDepositCode(?string $depositCode): Product
    {
        $this->depositCode = $depositCode;
        return $this;
    }

    public function setCodeFromCustom(?string $codeFromCustom): Product
    {
        $this->codeFromCustom = $codeFromCustom;
        return $this;
    }

    public function setGuaranty(?string $guaranty): Product
    {
        $this->guaranty = $guaranty;
        return $this;
    }

    public function setCodeFromSupplier(?string $codeFromSupplier): Product
    {
        $this->codeFromSupplier = $codeFromSupplier;
        return $this;
    }

    public function setCodeFromVendor(?string $codeFromVendor): Product
    {
        $this->codeFromVendor = $codeFromVendor;
        return $this;
    }

    public function setProductgroup(?string $productgroup): Product
    {
        $this->productgroup = $productgroup;
        return $this;
    }

    public function setPriority(?int $priority): Product
    {
        $this->priority = $priority;
        return $this;
    }

    public function setGoogleProductCategoryId(int $googleProductCategoryId): Product
    {
        $this->googleProductCategoryId = $googleProductCategoryId;
        return $this;
    }

    public function setEan(?string $ean): Product
    {
        $this->ean = $ean;
        return $this;
    }

    public function setLanguage(?string $language): Product
    {
        $this->language = $language;
        return $this;
    }

    public function setName(?string $name): Product
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription(?string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    public function setLabel(?string $label): Product
    {
        $this->label = $label;
        return $this;
    }

    public function setVariantName(?string $variantName): Product
    {
        $this->variantName = $variantName;
        return $this;
    }

    public function setLabelSize(?string $labelSize): Product
    {
        $this->labelSize = $labelSize;
        return $this;
    }

    public function setDistributor(?string $distributor): Product
    {
        $this->distributor = $distributor;
        return $this;
    }

    public function setComposition(?string $composition): Product
    {
        $this->composition = $composition;
        return $this;
    }

    public function getPackages(): array
    {
        if ($this->packages == null) {
            $this->packages = [];
        }
        return $this->packages;
    }

    public function setPackages(array $packages): Product
    {
        $this->packages = $packages;
        return $this;
    }

    public function isCorrectSku(): bool
    {
        return preg_match('/^[\w\-]+$/', $this->sku);
    }

    public function isEmptyCodeFromCustoms(): bool
    {
        if ($this->codeFromCustom == null) {
            return true;
        }

        if (trim($this->codeFromCustom) == '') {
            return true;
        }

        return false;
    }

    public function getVolume(): float
    {
        return $this->width * $this->height * $this->length;
    }

    /**
     * @var ?string
     * @Serializer\Type("string")
     */
    public $barcode;

    public function setBarcode(?string $barcode): Product
    {
        $this->barcode = $barcode;
        return $this;
    }
}
