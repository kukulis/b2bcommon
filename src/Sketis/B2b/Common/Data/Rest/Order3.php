<?php
/**
 * Order3.php
 * Created by Giedrius Tumelis.
 * Date: 2020-09-03
 * Time: 09:34
 */

namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

class Order3
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderNumber")
     */
    private $orderNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $currency;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    private $paid;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderSerie")
     */
    private $orderSerie;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private $totalSum=0;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("orderStatus")
     */
    private $orderStatus;


    /**
     * @var Order3Line[]
     * @Serializer\Type("array<Sketis\B2b\Common\Data\Rest\Order3Line>")
     */
    private $lines=[];

    /**
     * @var DeliveryInfo
     * @Serializer\Type("Sketis\B2b\Common\Data\DeliveryInfo")
     * @Serializer\SerializedName("deliveryInfo")
     */
    private $deliveryInfo;

    /**
     * @return string
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber(string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency=null): void
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function isPaid(): ?bool
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid(bool $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return DeliveryInfo
     */
    public function getDeliveryInfo(): ?DeliveryInfo
    {
        return $this->deliveryInfo;
    }

    /**
     * @param DeliveryInfo $deliveryInfo
     */
    public function setDeliveryInfo(DeliveryInfo $deliveryInfo=null): void
    {
        $this->deliveryInfo = $deliveryInfo;
    }

    /**
     * @return Order3Line[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    /**
     * @param Order3Line[] $lines
     */
    public function setLines(array $lines): void
    {
        $this->lines = $lines;
    }
    public function addLine( Order3Line  $line ) {
        $this->lines[] = $line;
    }

    /**
     * @return float
     */
    public function getTotalSum(): float
    {
        return $this->totalSum;
    }

    /**
     * @param float $totalSum
     */
    public function setTotalSum(float $totalSum): void
    {
        $this->totalSum = $totalSum;
    }

    /**
     * @return string
     */
    public function getOrderSerie(): ?string
    {
        return $this->orderSerie;
    }

    /**
     * @param string $orderSerie
     */
    public function setOrderSerie(string $orderSerie): void
    {
        $this->orderSerie = $orderSerie;
    }

    /**
     * @return string[]
     */
    public function getSkus() {
        $skus = [];
        foreach ( $this->lines as $line ) {
            $skus[] = $line->getSku();
        }
        return $skus;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(string $orderStatus=null): void
    {
        $this->orderStatus = $orderStatus;
    }
}