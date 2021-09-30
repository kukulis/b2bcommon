<?php
namespace Sketis\B2b\Common\Data\Rest;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class DeliveryInfo Dalis laukų sutampa su SketisOrderInfo, bet šita klasė naudojama JSON'e, SketisOrderInfo DB.
 *
 * @package Sketis\B2b\Common\Data
 */
class DeliveryInfo
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryCode")
     */
    public $deliveryCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryTypeChosen")
     */
    public $deliveryTypeChosen;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryNotes")
     */
    public $deliveryNotes;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("paymentCode")
     */
    public $paymentCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("paymentNotes")
     */
    public $paymentNotes;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryAddress")
     */
    public $deliveryAddress;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("terminalCode")
     */
    public $terminalCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("terminalAddress")
     */
    public $terminalAddress;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("countryCode")
     */
    public $countryCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerName")
     */
    public $buyerName;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerEmail")
     */
    public $buyerEmail;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerPhone")
     */
    public $buyerPhone;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerCellPhone")
     */
    public $buyerCellPhone;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerPostCode")
     */
    public $buyerPostCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerStreet")
     */
    public $buyerStreet;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("buyerCity")
     */
    public $buyerCity;

    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\SerializedName("codValue")
     */
    public $codValue;


    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyName")
     */
    public $companyName;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyCode")
     */
    public $companyCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyVatCode")
     */
    public $companyVatCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyStreet")
     */
    public $companyStreet;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyZip")
     */
    public $companyZip;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyCity")
     */
    public $companyCity;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyCountry")
     */
    public $companyCountry;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("companyPhone")
     */
    public $companyPhone;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transportCode")
     */
    public $transportCode;
}