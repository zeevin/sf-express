<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:36
 * Source: OrderSearchResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class OrderSearchResponse
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("orderid")
     * @Serializer\Type("string")
     */
    private $orderId;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("mailno")
     * @Serializer\Type("string")
     */
    private $mailNo;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("origincode")
     * @Serializer\Type("string")
     */
    private $originCode;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("destcode")
     * @Serializer\Type("string")
     */
    private $destCode;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("filter_result")
     * @Serializer\Type("integer")
     */
    private $filterResult;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("remark")
     * @Serializer\Type("string")
     */
    private $remark;

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
    public function getMailNo()
    {
        return $this->mailNo;
    }

    /**
     * @return mixed
     */
    public function getOriginCode()
    {
        return $this->originCode;
    }

    /**
     * @return mixed
     */
    public function getDestCode()
    {
        return $this->destCode;
    }

    /**
     * @return mixed
     */
    public function getFilterResult()
    {
        return $this->filterResult;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }
}