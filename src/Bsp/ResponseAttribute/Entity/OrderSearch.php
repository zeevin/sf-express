<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:47
 * Source: OrderSearch.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\ResponseAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class OrderSearch
{
    /**
     * @Serializer\SerializedName("OrderResponse")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Entity\OrderSearchResponse")
     */
    protected $orderResponse;

    /**
     * @return OrderSearchResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }
}