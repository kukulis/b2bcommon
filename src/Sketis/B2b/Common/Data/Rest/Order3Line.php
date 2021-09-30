<?php
/**
 * Order3Line.php
 * Created by Giedrius Tumelis.
 * Date: 2020-09-03
 * Time: 09:52
 */

namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;


class Order3Line
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $sku;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $amount;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $price;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $ean; // optional


    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price ?? 0;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getEan(): ?string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean = null): void
    {
        $this->ean = $ean;
    }
}