<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 11:56
 * Source: Order.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class Order
{
    /**
     * @Serializer\SerializedName("Order")
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Object\Order")
     */
    private $orderRequest;

    /**
     * @return \Zeevin\Sf\Bsp\RequestAttribute\Object\Order
     */
    public function getOrderRequest()
    {
        $this->orderRequest instanceof \Zeevin\Sf\Bsp\RequestAttribute\Object\Order || $this->orderRequest = new \Zeevin\Sf\Bsp\RequestAttribute\Object\Order();
        return $this->orderRequest;
    }
}