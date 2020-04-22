<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 11:40
 * Source: OrderConfirm.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class OrderConfirm
{
    /**
     * @var \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderConfirm
     * @Serializer\SerializedName("OrderConfirm")
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Object\OrderConfirm")
     */
    protected $orderConfirmRequest;

    /**
     * @return \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderConfirm
     */
    public function getOrderConfirmRequest()
    {
        $this->orderConfirmRequest instanceof \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderConfirm
        || $this->orderConfirmRequest = new \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderConfirm();

        return $this->orderConfirmRequest;
    }
}