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
use Zeevin\Sf\Bsp\ResponseAttribute\Object\OrderSearchResponse;

/**
 * Class OrderSearch
 *
 * @package Zeevin\Sf\Bsp\ResponseAttribute\Entity
 */
class OrderSearch
{
    /**
     * @Serializer\SerializedName("OrderResponse")
     * @Serializer\Type("Zeevin\Sf\Bsp\ResponseAttribute\Object\OrderSearchResponse")
     */
    private $orderResponse;

    /**
     * @return OrderSearchResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }
}