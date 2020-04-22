<?php
/**
 * author Cao Kang(caokangoutlook.com)
 * Date: 2020/4/20
 * Time: 11:35
 * Source: Order.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;


/**
 * Class Order
 * package Zeevin\Sf\Bsp\RequestAttribute
 */
class Order
{
    /**
     * @XmlAttribute
     * @SerializedName("orderid")
     */
    private $orderid;
    /**
     * @XmlAttribute
     * @SerializedName("mailno")
     */
    private $mailno;
    /**
     * @XmlAttribute
     * @SerializedName("j_company")
     */
    private $jCompany;
    /**
     * @XmlAttribute
     * @SerializedName("j_contact")
     */
    private $jContact;
    /**
     * @XmlAttribute
     * @SerializedName("j_tel")
     */
    private $jTel;
    /**
     * @XmlAttribute
     * @SerializedName("j_mobile")
     */
    private $jMobile;
    /**
     * @XmlAttribute
     * @SerializedName("j_province")
     */
    private $jProvince;
    /**
     * @XmlAttribute
     * @SerializedName("j_city")
     */
    private $jCity;
    /**
     * @XmlAttribute
     * @SerializedName("j_county")
     */
    private $jCounty;
    /**
     * @XmlAttribute
     * @SerializedName("j_address")
     */
    private $jAddress;
    /**
     * @XmlAttribute
     * @SerializedName("d_company")
     */
    private $dCompany;
    /**
     * @XmlAttribute
     * @SerializedName("d_contact")
     */
    private $dContact;
    /**
     * @XmlAttribute
     * @SerializedName("d_tel")
     */
    private $dTel;
    /**
     * @XmlAttribute
     * @SerializedName("d_mobile")
     */
    private $dMobile;
    /**
     * @XmlAttribute
     * @SerializedName("d_province")
     */
    private $dProvince;
    /**
     * @XmlAttribute
     * @SerializedName("d_city")
     */
    private $dCity;
    /**
     * @XmlAttribute
     * @SerializedName("d_county")
     */
    private $dCounty;
    /**
     * @XmlAttribute
     * @SerializedName("d_address")
     */
    private $dAddress;
    /**
     * @XmlAttribute
     * @SerializedName("custid")
     */
    private $custId;
    /**
     * @XmlAttribute
     * @SerializedName("pay_method")
     */
    private $payMethod;
    /**
     * @XmlAttribute
     * @SerializedName("express_type")
     */
    private $expressType;
    /**
     * @XmlAttribute
     * @SerializedName("parcel_quantity")
     */
    private $parcel_Quantity;
    /**
     * @XmlAttribute
     * @SerializedName("cargo_length")
     */
    private $cargoLength;
    /**
     * @XmlAttribute
     * @SerializedName("cargo_width")
     */
    private $cargoWidth;
    /**
     * @XmlAttribute
     * @SerializedName("cargo_height")
     */
    private $cargoHeight;
    /**
     * @XmlAttribute
     * @SerializedName("volume")
     */
    private $volume;
    /**
     * @XmlAttribute
     * @SerializedName("cargo_total_weight")
     */
    private $cargoTotalWeight;
    /**
     * @XmlAttribute
     * @SerializedName("sendstarttime")
     */
    private $sendStartTime;
    /**
     * @XmlAttribute
     * @SerializedName("is_docall")
     */
    private $isDocall;
    /**
     * @XmlAttribute
     * @SerializedName("need_return_tracking_no")
     */
    private $needReturnTrackingNo;
    /**
     * @XmlAttribute
     * @SerializedName("return_tracking")
     */
    private $returnTracking;
    /**
     * @XmlAttribute
     * @SerializedName("temp_range")
     */
    private $tempRange;
    /**
     * @XmlAttribute
     * @SerializedName("template")
     */
    private $template;
    /**
     * @XmlAttribute
     * @SerializedName("remark")
     */
    private $remark;
    /**
     * @XmlAttribute
     * @SerializedName("oneself_pickup_flg")
     */
    private $oneselfPickupFlg;
    /**
     * @XmlAttribute
     * @SerializedName("special_delivery_type_code")
     */
    private $specialDeliveryTypeCode;
    /**
     * @XmlAttribute
     * @SerializedName("special_delivery_value")
     */
    private $specialDeliveryValue;
    /**
     * @XmlAttribute
     * @SerializedName("realname_num")
     */
    private $realNameNum;
    /**
     * @XmlAttribute
     * @SerializedName("routelabelForReturn")
     */
    private $routeLabelForReturn;
    /**
     * @XmlAttribute
     * @SerializedName("routelabelService")
     */
    private $routeLabelService;
    /**
     * @XmlAttribute
     * @SerializedName("is_unified_waybill_no")
     */
    private $isUnifiedWaybillNo;

    /**
     * @return mixed
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * @param  mixed  $orderid
     *
     * @return Order
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailno()
    {
        return $this->mailno;
    }

    /**
     * @param  mixed  $mailno
     *
     * @return Order
     */
    public function setMailno($mailno)
    {
        $this->mailno = $mailno;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJCompany()
    {
        return $this->jCompany;
    }

    /**
     * @param  mixed  $jCompany
     *
     * @return Order
     */
    public function setJCompany($jCompany)
    {
        $this->jCompany = $jCompany;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJContact()
    {
        return $this->jContact;
    }

    /**
     * @param  mixed  $jContact
     *
     * @return Order
     */
    public function setJContact($jContact)
    {
        $this->jContact = $jContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJTel()
    {
        return $this->jTel;
    }

    /**
     * @param  mixed  $jTel
     *
     * @return Order
     */
    public function setJTel($jTel)
    {
        $this->jTel = $jTel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJMobile()
    {
        return $this->jMobile;
    }

    /**
     * @param  mixed  $jMobile
     *
     * @return Order
     */
    public function setJMobile($jMobile)
    {
        $this->jMobile = $jMobile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJProvince()
    {
        return $this->jProvince;
    }

    /**
     * @param  mixed  $jProvince
     *
     * @return Order
     */
    public function setJProvince($jProvince)
    {
        $this->jProvince = $jProvince;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJCity()
    {
        return $this->jCity;
    }

    /**
     * @param  mixed  $jCity
     *
     * @return Order
     */
    public function setJCity($jCity)
    {
        $this->jCity = $jCity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJCounty()
    {
        return $this->jCounty;
    }

    /**
     * @param  mixed  $jCounty
     *
     * @return Order
     */
    public function setJCounty($jCounty)
    {
        $this->jCounty = $jCounty;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJAddress()
    {
        return $this->jAddress;
    }

    /**
     * @param  mixed  $jAddress
     *
     * @return Order
     */
    public function setJAddress($jAddress)
    {
        $this->jAddress = $jAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDCompany()
    {
        return $this->dCompany;
    }

    /**
     * @param  mixed  $dCompany
     *
     * @return Order
     */
    public function setDCompany($dCompany)
    {
        $this->dCompany = $dCompany;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDContact()
    {
        return $this->dContact;
    }

    /**
     * @param  mixed  $dContact
     *
     * @return Order
     */
    public function setDContact($dContact)
    {
        $this->dContact = $dContact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDTel()
    {
        return $this->dTel;
    }

    /**
     * @param  mixed  $dTel
     *
     * @return Order
     */
    public function setDTel($dTel)
    {
        $this->dTel = $dTel;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDMobile()
    {
        return $this->dMobile;
    }

    /**
     * @param  mixed  $dMobile
     *
     * @return Order
     */
    public function setDMobile($dMobile)
    {
        $this->dMobile = $dMobile;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDProvince()
    {
        return $this->dProvince;
    }

    /**
     * @param  mixed  $dProvince
     *
     * @return Order
     */
    public function setDProvince($dProvince)
    {
        $this->dProvince = $dProvince;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDCity()
    {
        return $this->dCity;
    }

    /**
     * @param  mixed  $dCity
     *
     * @return Order
     */
    public function setDCity($dCity)
    {
        $this->dCity = $dCity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDCounty()
    {
        return $this->dCounty;
    }

    /**
     * @param  mixed  $dCounty
     *
     * @return Order
     */
    public function setDCounty($dCounty)
    {
        $this->dCounty = $dCounty;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDAddress()
    {
        return $this->dAddress;
    }

    /**
     * @param  mixed  $dAddress
     *
     * @return Order
     */
    public function setDAddress($dAddress)
    {
        $this->dAddress = $dAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustId()
    {
        return $this->custId;
    }

    /**
     * @param  mixed  $custId
     *
     * @return Order
     */
    public function setCustId($custId)
    {
        $this->custId = $custId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * @param  mixed  $payMethod
     *
     * @return Order
     */
    public function setPayMethod($payMethod)
    {
        $this->payMethod = $payMethod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpressType()
    {
        return $this->expressType;
    }

    /**
     * @param  mixed  $expressType
     *
     * @return Order
     */
    public function setExpressType($expressType)
    {
        $this->expressType = $expressType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParcelQuantity()
    {
        return $this->parcel_Quantity;
    }

    /**
     * @param  mixed  $parcel_Quantity
     *
     * @return Order
     */
    public function setParcelQuantity($parcel_Quantity)
    {
        $this->parcel_Quantity = $parcel_Quantity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoLength()
    {
        return $this->cargoLength;
    }

    /**
     * @param  mixed  $cargoLength
     *
     * @return Order
     */
    public function setCargoLength($cargoLength)
    {
        $this->cargoLength = $cargoLength;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoWidth()
    {
        return $this->cargoWidth;
    }

    /**
     * @param  mixed  $cargoWidth
     *
     * @return Order
     */
    public function setCargoWidth($cargoWidth)
    {
        $this->cargoWidth = $cargoWidth;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoHeight()
    {
        return $this->cargoHeight;
    }

    /**
     * @param  mixed  $cargoHeight
     *
     * @return Order
     */
    public function setCargoHeight($cargoHeight)
    {
        $this->cargoHeight = $cargoHeight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param  mixed  $volume
     *
     * @return Order
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoTotalWeight()
    {
        return $this->cargoTotalWeight;
    }

    /**
     * @param  mixed  $cargoTotalWeight
     *
     * @return Order
     */
    public function setCargoTotalWeight($cargoTotalWeight)
    {
        $this->cargoTotalWeight = $cargoTotalWeight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSendStartTime()
    {
        return $this->sendStartTime;
    }

    /**
     * @param  mixed  $sendStartTime
     *
     * @return Order
     */
    public function setSendStartTime($sendStartTime)
    {
        $this->sendStartTime = $sendStartTime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsDocall()
    {
        return $this->isDocall;
    }

    /**
     * @param  mixed  $isDocall
     *
     * @return Order
     */
    public function setIsDocall($isDocall)
    {
        $this->isDocall = $isDocall;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeedReturnTrackingNo()
    {
        return $this->needReturnTrackingNo;
    }

    /**
     * @param  mixed  $needReturnTrackingNo
     *
     * @return Order
     */
    public function setNeedReturnTrackingNo($needReturnTrackingNo)
    {
        $this->needReturnTrackingNo = $needReturnTrackingNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnTracking()
    {
        return $this->returnTracking;
    }

    /**
     * @param  mixed  $returnTracking
     *
     * @return Order
     */
    public function setReturnTracking($returnTracking)
    {
        $this->returnTracking = $returnTracking;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTempRange()
    {
        return $this->tempRange;
    }

    /**
     * @param  mixed  $tempRange
     *
     * @return Order
     */
    public function setTempRange($tempRange)
    {
        $this->tempRange = $tempRange;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param  mixed  $template
     *
     * @return Order
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param  mixed  $remark
     *
     * @return Order
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOneselfPickupFlg()
    {
        return $this->oneselfPickupFlg;
    }

    /**
     * @param  mixed  $oneselfPickupFlg
     *
     * @return Order
     */
    public function setOneselfPickupFlg($oneselfPickupFlg)
    {
        $this->oneselfPickupFlg = $oneselfPickupFlg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialDeliveryTypeCode()
    {
        return $this->specialDeliveryTypeCode;
    }

    /**
     * @param  mixed  $specialDeliveryTypeCode
     *
     * @return Order
     */
    public function setSpecialDeliveryTypeCode($specialDeliveryTypeCode)
    {
        $this->specialDeliveryTypeCode = $specialDeliveryTypeCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpecialDeliveryValue()
    {
        return $this->specialDeliveryValue;
    }

    /**
     * @param  mixed  $specialDeliveryValue
     *
     * @return Order
     */
    public function setSpecialDeliveryValue($specialDeliveryValue)
    {
        $this->specialDeliveryValue = $specialDeliveryValue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRealNameNum()
    {
        return $this->realNameNum;
    }

    /**
     * @param  mixed  $realNameNum
     *
     * @return Order
     */
    public function setRealNameNum($realNameNum)
    {
        $this->realNameNum = $realNameNum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRouteLabelForReturn()
    {
        return $this->routeLabelForReturn;
    }

    /**
     * @param  mixed  $routeLabelForReturn
     *
     * @return Order
     */
    public function setRouteLabelForReturn($routeLabelForReturn)
    {
        $this->routeLabelForReturn = $routeLabelForReturn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRouteLabelService()
    {
        return $this->routeLabelService;
    }

    /**
     * @param  mixed  $routeLabelService
     *
     * @return Order
     */
    public function setRouteLabelService($routeLabelService)
    {
        $this->routeLabelService = $routeLabelService;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsUnifiedWaybillNo()
    {
        return $this->isUnifiedWaybillNo;
    }

    /**
     * @param  mixed  $isUnifiedWaybillNo
     *
     * @return Order
     */
    public function setIsUnifiedWaybillNo($isUnifiedWaybillNo)
    {
        $this->isUnifiedWaybillNo = $isUnifiedWaybillNo;

        return $this;
    }
}