<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:36
 * Source: OrderConfirmResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class OrderConfirmResponse
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
     * @var integer
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("res_status")
     * @Serializer\Type("integer")
     */
    private $resStatus;

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
     * @return int
     */
    public function getResStatus(): int
    {
        return $this->resStatus;
    }

}