<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/22
 * Time: 10:27
 * Source: OrderSearch.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute\Object;


use JMS\Serializer\Annotation as Serializer;

class OrderSearch
{
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("orderid")
     */
    protected $orderId;
    /**
     * @Serializer\XmlAttribute
     * @Serializer\SerializedName("search_type")
     */
    protected $searchType;

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
     * @return OrderSearch
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param  mixed  $searchType
     *
     * @return OrderSearch
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;

        return $this;
    }
}