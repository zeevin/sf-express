<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 16:47
 * Source: OrderResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class OrderResponse
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
     * @Serializer\SerializedName("return_tracking_no")
     * @Serializer\Type("string")
     */
    private $returnTrackingNo;
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
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("mapping_mark")
     * @Serializer\Type("string")
     */
    private $mappingMark;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("isUpstairs")
     * @Serializer\Type("string")
     */
    private $isUpstairs;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("isSpecialWarehouseService")
     * @Serializer\Type("string")
     */
    private $isSpecialWarehouseService;

    /**
     * @Serializer\SerializedName("rls_info")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\RlsInfo")
     */
    private $rlsInfo;

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
    public function getReturnTrackingNo()
    {
        return $this->returnTrackingNo;
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

    /**
     * @return mixed
     */
    public function getMappingMark()
    {
        return $this->mappingMark;
    }

    /**
     * @return mixed
     */
    public function getIsUpstairs()
    {
        return $this->isUpstairs;
    }

    /**
     * @return mixed
     */
    public function getIsSpecialWarehouseService()
    {
        return $this->isSpecialWarehouseService;
    }

    /**
     * @return RlsInfo
     */
    public function getRlsInfo()
    {
        return $this->rlsInfo;
    }

}