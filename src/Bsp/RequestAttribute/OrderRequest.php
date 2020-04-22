<?php
/**
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2020/4/21
 * Time: 11:39
 * Source: OrderRequest.php
 * Project: sf-express
 */

namespace Zeevin\Sf\Bsp\RequestAttribute;


use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;
use Zeevin\Sf\Bsp\RequestAttribute\Entity\Order;
use Zeevin\Sf\Kernel\BaseRequestAttribute;

/**
 * Class OrderRequest
 * @XmlRoot("Request")
 * @package Zeevin\Sf\Bsp\RequestAttribute
 */
class OrderRequest extends BaseRequestAttribute
{
    /**
     * @XmlAttribute
     */
    protected $service = 'OrderService';

    /**
     * @Type("Zeevin\Sf\Bsp\RequestAttribute\Entity\Order")
     * @Serializer\SerializedName("Body")
     */
    protected $body;

    /**
     * @return Order
     */
    public function getBody()
    {
        $this->body instanceof Order || $this->body = new Order();

        return $this->body;
    }
}