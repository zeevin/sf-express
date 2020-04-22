<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 11:47
 * Source: OrderConfirm.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class OrderConfirm
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("orderid")
     */
    private $orderId;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("mailno")
     */
    private $mailNo;
    /**
     * @var integer
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("dealtype")
     * @Serializer\Type("integer")
     */
    private $dealType;

    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("customs_batchs")
     */
    private $customsBatchS;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("agent_no")
     */
    private $agentNo;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("consign_emp_code")
     */
    private $consignEmpCode;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("source_zone_code")
     */
    private $sourceZoneCode;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("in_process_waybill_no")
     */
    private $inProcessWaybillNo;

    /**
     * @var OrderConfirmOption
     * @Serializer\SerializedName("OrderConfirmOption")
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Object\OrderConfirmOption")
     */
    private $orderConfirmOption;

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param  mixed  $orderId
     *
     * @return OrderConfirm
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailNo()
    {
        return $this->mailNo;
    }

    /**
     * @param  mixed  $mailNo
     *
     * @return OrderConfirm
     */
    public function setMailNo($mailNo)
    {
        $this->mailNo = $mailNo;

        return $this;
    }

    /**
     * @return int
     */
    public function getDealType(): int
    {
        return $this->dealType;
    }

    /**
     * @param  int  $dealType
     *
     * @return OrderConfirm
     */
    public function setDealType(int $dealType): OrderConfirm
    {
        $this->dealType = $dealType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomsBatchS()
    {
        return $this->customsBatchS;
    }

    /**
     * @param  mixed  $customsBatchS
     *
     * @return OrderConfirm
     */
    public function setCustomsBatchS($customsBatchS)
    {
        $this->customsBatchS = $customsBatchS;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgentNo()
    {
        return $this->agentNo;
    }

    /**
     * @param  mixed  $agentNo
     *
     * @return OrderConfirm
     */
    public function setAgentNo($agentNo)
    {
        $this->agentNo = $agentNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsignEmpCode()
    {
        return $this->consignEmpCode;
    }

    /**
     * @param  mixed  $consignEmpCode
     *
     * @return OrderConfirm
     */
    public function setConsignEmpCode($consignEmpCode)
    {
        $this->consignEmpCode = $consignEmpCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSourceZoneCode()
    {
        return $this->sourceZoneCode;
    }

    /**
     * @param  mixed  $sourceZoneCode
     *
     * @return OrderConfirm
     */
    public function setSourceZoneCode($sourceZoneCode)
    {
        $this->sourceZoneCode = $sourceZoneCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInProcessWaybillNo()
    {
        return $this->inProcessWaybillNo;
    }

    /**
     * @param  mixed  $inProcessWaybillNo
     *
     * @return OrderConfirm
     */
    public function setInProcessWaybillNo($inProcessWaybillNo)
    {
        $this->inProcessWaybillNo = $inProcessWaybillNo;

        return $this;
    }

    /**
     * @return OrderConfirmOption
     */
    public function getOrderConfirmOption(): OrderConfirmOption
    {
        $this->orderConfirmOption instanceof OrderConfirmOption || $this->orderConfirmOption = new OrderConfirmOption();

        return $this->orderConfirmOption;
    }

}