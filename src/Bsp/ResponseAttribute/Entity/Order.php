<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 16:38
 * Source: Order.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class Order
 * @package Zeevin\Sf\Bsp\ResponseAttribute\Entity
 */
class Order
{
    /**
     * @Serializer\SerializedName("OrderResponse")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\OrderResponse")
     */
    protected $orderResponse;

    /**
     * @return OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }
}