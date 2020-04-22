<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:27
 * Source: OrderSearch.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Entity;


use JMS\Serializer\Annotation as Serializer;

class OrderSearch
{
    /**
     * @Serializer\SerializedName("OrderSearch")
     * @Serializer\Type("Zeevin\Sf\Bsp\RequestAttribute\Object\OrderSearch")
     */
    protected $orderSearchRequest;

    /**
     * @return \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderSearch
     */
    public function getOrderSearchRequest()
    {
        $this->orderSearchRequest instanceof \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderSearch || $this->orderSearchRequest = new \Zeevin\Sf\Bsp\RequestAttribute\Object\OrderSearch();
        return $this->orderSearchRequest;
    }
}