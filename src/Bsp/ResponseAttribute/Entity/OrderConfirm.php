<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:47
 * Source: OrderConfirm.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;
use Zeevin\Sf\Bsp\ResponseAttribute\Object\OrderConfirmResponse;

/**
 * Class OrderConfirm
 *
 * @package Zeevin\Sf\Bsp\ResponseAttribute\Entity
 */
class OrderConfirm
{
    /**
     * @Serializer\SerializedName("OrderConfirmResponse")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Object\OrderConfirmResponse")
     */
    private $orderConfirmResponse;

    /**
     * @return OrderConfirmResponse
     */
    public function getOrderConfirmResponse()
    {
        return $this->orderConfirmResponse;
    }
}