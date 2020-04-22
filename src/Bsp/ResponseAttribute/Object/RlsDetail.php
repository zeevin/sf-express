<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 17:29
 * Source: RlsDetail.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class RlsDetail
{
    /**
     * @Serializer\SerializedName("waybillNo")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $waybillNo;
    /**
     * @Serializer\SerializedName("sourceTransferCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $sourceTransferCode;
    /**
     * @Serializer\SerializedName("sourceCityCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $sourceCityCode;
    /**
     * @Serializer\SerializedName("sourceDeptCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $sourceDeptCode;
    /**
     * @Serializer\SerializedName("sourceTeamCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $sourceTeamCode;
    /**
     * @Serializer\SerializedName("destCityCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destCityCode;
    /**
     * @Serializer\SerializedName("destDeptCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destDeptCode;
    /**
     * @Serializer\SerializedName("destDeptCodeMapping")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destDeptCodeMapping;
    /**
     * @Serializer\SerializedName("destTeamCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destTeamCode;
    /**
     * @Serializer\SerializedName("destTeamCodeMapping")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destTeamCodeMapping;
    /**
     * @Serializer\SerializedName("destTransferCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destTransferCode;
    /**
     * @Serializer\SerializedName("destRouteLabel")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destRouteLabel;
    /**
     * @Serializer\SerializedName("proName")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $proName;
    /**
     * @Serializer\SerializedName("cargoTypeCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $cargoTypeCode;
    /**
     * @Serializer\SerializedName("limitTypeCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $limitTypeCode;
    /**
     * @Serializer\SerializedName("expressTypeCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $expressTypeCode;
    /**
     * @Serializer\SerializedName("codingMapping")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $codingMapping;
    /**
     * @Serializer\SerializedName("codingMappingOut")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $codingMappingOut;
    /**
     * @Serializer\SerializedName("xbFlag")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $xbFlag;
    /**
     * @Serializer\SerializedName("printFlag")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $printFlag;
    /**
     * @Serializer\SerializedName("twoDimensionCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $twoDimensionCode;
    /**
     * @Serializer\SerializedName("proCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $proCode;
    /**
     * @Serializer\SerializedName("printIcon")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $printIcon;
    /**
     * @Serializer\SerializedName("abFlag")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $abFlag;
    /**
     * @Serializer\SerializedName("errMsg")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $errMsg;
    /**
     * @Serializer\SerializedName("destPortCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destPortCode;
    /**
     * @Serializer\SerializedName("destCountry")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destCountry;
    /**
     * @Serializer\SerializedName("destPostCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destPostCode;
    /**
     * @Serializer\SerializedName("goodsValueTotal")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $goodsValueTotal;
    /**
     * @Serializer\SerializedName("currencySymbol")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $currencySymbol;
    /**
     * @Serializer\SerializedName("goodsNumber")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $goodsNumber;
    /**
     * @Serializer\SerializedName("checkCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $checkCode;
    /**
     * @Serializer\SerializedName("destGisDeptCode")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $destGisDeptCode;

    /**
     * @return mixed
     */
    public function getWaybillNo()
    {
        return $this->waybillNo;
    }

    /**
     * @return mixed
     */
    public function getSourceTransferCode()
    {
        return $this->sourceTransferCode;
    }

    /**
     * @return mixed
     */
    public function getSourceCityCode()
    {
        return $this->sourceCityCode;
    }

    /**
     * @return mixed
     */
    public function getSourceDeptCode()
    {
        return $this->sourceDeptCode;
    }

    /**
     * @return mixed
     */
    public function getSourceTeamCode()
    {
        return $this->sourceTeamCode;
    }

    /**
     * @return mixed
     */
    public function getDestCityCode()
    {
        return $this->destCityCode;
    }

    /**
     * @return mixed
     */
    public function getDestDeptCode()
    {
        return $this->destDeptCode;
    }

    /**
     * @return mixed
     */
    public function getDestDeptCodeMapping()
    {
        return $this->destDeptCodeMapping;
    }

    /**
     * @return mixed
     */
    public function getDestTeamCode()
    {
        return $this->destTeamCode;
    }

    /**
     * @return mixed
     */
    public function getDestTeamCodeMapping()
    {
        return $this->destTeamCodeMapping;
    }

    /**
     * @return mixed
     */
    public function getDestTransferCode()
    {
        return $this->destTransferCode;
    }

    /**
     * @return mixed
     */
    public function getDestRouteLabel()
    {
        return $this->destRouteLabel;
    }

    /**
     * @return mixed
     */
    public function getProName()
    {
        return $this->proName;
    }

    /**
     * @return mixed
     */
    public function getCargoTypeCode()
    {
        return $this->cargoTypeCode;
    }

    /**
     * @return mixed
     */
    public function getLimitTypeCode()
    {
        return $this->limitTypeCode;
    }

    /**
     * @return mixed
     */
    public function getExpressTypeCode()
    {
        return $this->expressTypeCode;
    }

    /**
     * @return mixed
     */
    public function getCodingMapping()
    {
        return $this->codingMapping;
    }

    /**
     * @return mixed
     */
    public function getCodingMappingOut()
    {
        return $this->codingMappingOut;
    }

    /**
     * @return mixed
     */
    public function getXbFlag()
    {
        return $this->xbFlag;
    }

    /**
     * @return mixed
     */
    public function getPrintFlag()
    {
        return $this->printFlag;
    }

    /**
     * @return mixed
     */
    public function getTwoDimensionCode()
    {
        return $this->twoDimensionCode;
    }

    /**
     * @return mixed
     */
    public function getProCode()
    {
        return $this->proCode;
    }

    /**
     * @return mixed
     */
    public function getPrintIcon()
    {
        return $this->printIcon;
    }

    /**
     * @return mixed
     */
    public function getAbFlag()
    {
        return $this->abFlag;
    }

    /**
     * @return mixed
     */
    public function getErrMsg()
    {
        return $this->errMsg;
    }

    /**
     * @return mixed
     */
    public function getDestPortCode()
    {
        return $this->destPortCode;
    }

    /**
     * @return mixed
     */
    public function getDestCountry()
    {
        return $this->destCountry;
    }

    /**
     * @return mixed
     */
    public function getDestPostCode()
    {
        return $this->destPostCode;
    }

    /**
     * @return mixed
     */
    public function getGoodsValueTotal()
    {
        return $this->goodsValueTotal;
    }

    /**
     * @return mixed
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @return mixed
     */
    public function getGoodsNumber()
    {
        return $this->goodsNumber;
    }

    /**
     * @return mixed
     */
    public function getCheckCode()
    {
        return $this->checkCode;
    }

    /**
     * @return mixed
     */
    public function getDestGisDeptCode()
    {
        return $this->destGisDeptCode;
    }
}