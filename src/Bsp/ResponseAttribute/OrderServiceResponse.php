<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 15:45
 * Source: OrderResponse.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Entity\Order;
use Zeevin\Sf\Kernel\BaseResponseAttribute;

/**
 * Class OrderServiceResponse
 * @Serializer\XmlRoot("Response")
 * @package Zeevin\Sf\Bsp\ResponseAttribute
 */
class OrderServiceResponse extends BaseResponseAttribute
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\Type("string")
     */
    protected $service;
    /**
     * @Serializer\SerializedName("Body")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\Order")
     */
    protected $body;

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return Order
     */
    public function getBody()
    {
        return $this->body;
    }

}