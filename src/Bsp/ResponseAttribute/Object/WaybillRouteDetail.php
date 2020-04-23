<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 17:29
 * Source: WaybillRouteDetail.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class WaybillRouteDetail
 * @package Zeevin\Sf\Bsp\ResponseAttribute\Object
 */
class WaybillRouteDetail
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("mailno")
     * @Serializer\Type("string")
     */
    private $mailNo;
    /**
     * @Serializer\SerializedName("orderid")
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    private $orderId;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("acceptTime")
     */
    private $acceptTime;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("acceptAddress")
     */
    private $acceptAddress;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("remark")
     */
    private $remark;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     * @Serializer\SerializedName("opCode")
     */
    private $opcode;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMailNo()
    {
        return $this->mailNo;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return mixed
     */
    public function getAcceptTime()
    {
        return $this->acceptTime;
    }

    /**
     * @return mixed
     */
    public function getAcceptAddress()
    {
        return $this->acceptAddress;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @return mixed
     */
    public function getOpcode()
    {
        return $this->opcode;
    }
}