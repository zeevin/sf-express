<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 16:51
 * Source: Route.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class Route
{
    const TRACKING_TYPE_SYS = 2;
    const TRACKING_TYPE_SF = 1;
    const TRACKING_TYPE_REV = 3;

    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("tracking_type")
     */
    private $trackingType = 1;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("tracking_number")
     */
    private $trackingNumber;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("method_type")
     */
    private $methodType;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("reference_number")
     */
    private $referenceNumber;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("check_phoneNo")
     */
    private $checkPhoneNo;

    /**
     * @return mixed
     */
    public function getTrackingType()
    {
        return $this->trackingType;
    }

    /**
     * @param  mixed  $trackingType
     *
     * @return Route
     */
    public function setTrackingType($trackingType)
    {
        $this->trackingType = $trackingType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param  mixed  $trackingNumber
     *
     * @return Route
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethodType()
    {
        return $this->methodType;
    }

    /**
     * @param  mixed  $methodType
     *
     * @return Route
     */
    public function setMethodType($methodType)
    {
        $this->methodType = $methodType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * @param  mixed  $referenceNumber
     *
     * @return Route
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCheckPhoneNo()
    {
        return $this->checkPhoneNo;
    }

    /**
     * @param  mixed  $checkPhoneNo
     *
     * @return Route
     */
    public function setCheckPhoneNo($checkPhoneNo)
    {
        $this->checkPhoneNo = $checkPhoneNo;

        return $this;
    }
}